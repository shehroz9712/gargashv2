<?php

namespace App\Http\Controllers;

use App\Models\CashTransaction;
use App\Models\DailyBalance;
use Illuminate\Http\Request;

class DailyBalanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $balances = DailyBalance::orderBy('date', 'desc')->get();
        return view('daily_balances.index', compact('balances'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date|unique:daily_balances',
            'opening_balance' => 'required|numeric|min:0',
        ]);

        DailyBalance::create([
            'date' => $request->date,
            'opening_balance' => $request->opening_balance,
            'closing_balance' => null,
            'status' => 'open',
        ]);

        return redirect()->route('daily_balances.index')->with('success', 'Daily balance created successfully.');
    }
    public function openDay()
    {

        $today = now()->toDateString();

        // Check if there is already a closed balance for today
        $existingClosedBalance = DailyBalance::where('date', $today)->where('status', 'closed')->first();

        if ($existingClosedBalance) {
            // Reopen the last closed balance for the same date
            $existingClosedBalance->status = 'open';
            $existingClosedBalance->save();
        } else {
            // Open a new balance if no closed balance exists for today
            $lastClosedBalance = DailyBalance::where('status', 'closed')->orderBy('id', 'desc')->first();
            $openingBalance = $lastClosedBalance ? $lastClosedBalance->closing_balance : 0;

            DailyBalance::create([
                'opening_balance' => $openingBalance,
                'cash_in' => 0,
                'date' => $today,
                'cash_out' => 0,
                'closing_balance' => 0,
                'status' => 'open'
            ]);
        }

        return redirect()->back()->with('success', 'Store opened successfully!');
    }

    public function closeDay()
    {
        $dailyBalance = DailyBalance::where('status', 'open')->first();
        if (!$dailyBalance) {
            return redirect()->back()->with('error', 'No open store found to close.');
        }

        $dailyBalance->closing_balance = $dailyBalance->opening_balance + $dailyBalance->cash_in - $dailyBalance->cash_out;
        $dailyBalance->status = 'closed';
        $dailyBalance->save();

        return redirect()->back()->with('success', 'Store closed successfully!');
    }


    public function detail(Request $request, $decrypt_id)
    {
        $id = decrypt($decrypt_id);
        $transactions = CashTransaction::where('daily_balances_id', $id)->with('dailyBalance')->orderBy('id', 'desc')->get();

        return view('cashtransactions.index', compact('transactions'));
    }
}
