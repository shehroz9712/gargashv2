<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyExpenseRequest;
use App\Models\Company;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::orderBy('date', 'desc')->get();
        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::get();

        return view('expenses.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DailyExpenseRequest $request)
    {
        $data = $request->except([
            '_token',
        ]);
        $data['date'] = Now();
        Expense::create($data);

        return redirect()->route('expenses.index')->with('success', 'Expense recorded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $Expense)
    {
        return view('expenses.show', compact('Expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $Expense)
    {
        return view('expenses.edit', compact('Expense'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(DailyExpenseRequest $request, Expense $Expense)
    {

        $data = $request->except([
            '_token',
        ]);
        $Expense->update($data);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $Expense)
    {
        $Expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}
