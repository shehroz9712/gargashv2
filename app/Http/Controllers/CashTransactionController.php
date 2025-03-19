<?php

namespace App\Http\Controllers;

use App\Models\CashTransaction;
use App\Models\Company;
use App\Models\DailyBalance;
use App\Models\Expense;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CashTransactionController extends Controller
{
    public function create()
    {
        $companies = Company::all();
        $vehicles = Vehicle::all();
        return view('cashtransactions.create', compact('companies', 'vehicles'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // $request->validate([
        //     'date' => 'required|date',
        //     'type' => 'required|in:cash_in,cash_out',
        //     'amount' => 'required|numeric',
        //     'description' => 'nullable|string'
        // ]);


        $dailyBalance = DailyBalance::where('status', 'open')->first();
        if (!$dailyBalance) {
            return redirect()->back()->with('error', 'Please open the store before making transactions.');
        }
        $transaction = CashTransaction::create([
            'date' => now(),
            'type' => $request->type,
            'amount' => $request->amount,
            'description' => $request->description,
            'daily_balances_id' => $dailyBalance->id
        ]);
        if ($request->type === 'cash_in' && $request->company_id) {
            $company = Company::find($request->company_id);
            if ($company) {
                $company->balance += $request->amount; // Adding to company balance
                $company->save();
            }
        }
        if ($request->type === 'cash_out') {
            // $request->validate([
            //     'company_id' => 'required|string',
            //     'bags' => 'nullable|integer',
            //     'cash_payment' => 'nullable|numeric',
            //     'vehicle_id' => 'required|string',
            //     'expense_type' => 'required|in:diesel,misc,carriage,fare'
            // ]);

            Expense::create([
                'date' => now(),
                'cash_transactions_id' => $transaction->id,
                'title' => $request->description,
                'company_id' => $request->company_id,
                'bags' => $request->bags,
                'cash_payment' => $request->cash_payment,
                'vehicle_id' => $request->vehicle_id,
                'expense_type' => $request->expense_type,
                'amount' => $request->amount
            ]);
            $company = Company::find($request->company_id);
            if ($company) {
                $company->balance -= $request->amount; // Deducting from company balance
                $company->save();
            }
        }

        $this->updateDailyBalance($dailyBalance);
        return redirect()->back()->with('success', 'Transaction saved successfully!');
    }
    private function updateDailyBalance($dailyBalance)
    {
        $dailyBalance->cash_in = CashTransaction::where('daily_balances_id', $dailyBalance->id)->where('type', 'cash_in')->sum('amount');
        $dailyBalance->cash_out = CashTransaction::where('daily_balances_id', $dailyBalance->id)->where('type', 'cash_out')->sum('amount');
        $dailyBalance->save();
    }

    public function show(Request $request, $decrypt_id)
    {
        $id = decrypt($decrypt_id);
        $transactions = CashTransaction::where('id', $id)->with('expense')
            ->first();
        return view('cashtransactions.show', compact('transactions'));
    }
}
