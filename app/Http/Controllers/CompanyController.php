<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompaniesDataRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
    // Display a listing of the resource
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('companies.create');
    }

    // Store a newly created resource in storage
    public function store(CompaniesDataRequest $request)
    {
        $data = $request->except([
            '_token',
        ]);

        Company::create($data);
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    // Display the specified resource
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    // Show the form for editing the specified resource
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
