@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Create Expenses</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <form action="{{ route('expenses.store') }}" method="POST">
                        @csrf
                        <!-- Date -->
                        <div class="mb-3 row">
                            <label for="date" class="col-form-label">Date</label>
                            <input type="date" class="form-control" name="date" id="date"
                                value="{{ old('date', now()->toDateString()) }}" required>
                            @error('date')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Title -->
                        <div class="mb-3 row">
                            <label for="title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title') }}" required>
                            @error('title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Company -->
                        <div class="mb-3 row">
                            <label for="company" class="col-form-label">Company Name</label>
                            <select class="form-control" name="company" id="company" id="">
                                @foreach ($companies as $company)
                                    <option {{ old('company') == $company->id ? 'selected' : '' }}
                                        value="{{ $company->id }}">
                                        {{ $company->short_name  }}</option>
                                @endforeach
                            </select>
                            @error('company')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Bags -->
                        <div class="mb-3 row">
                            <label for="bags" class="col-form-label">Bags</label>
                            <input type="number" class="form-control" name="bags" id="bags"
                                value="{{ old('bags', 0) }}" min="0" required>
                            @error('bags')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Cash Payment -->
                        <div class="mb-3 row">
                            <label for="cash_payment" class="col-form-label">Cash Payment</label>
                            <input type="number" class="form-control" name="cash_payment" id="cash_payment"
                                value="{{ old('cash_payment', 0) }}" step="0.01" required>
                            @error('cash_payment')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Vehicle -->
                        <div class="mb-3 row">
                            <label for="vehicle" class="col-form-label">Vehicle</label>
                            <input type="text" class="form-control" name="vehicle" id="vehicle"
                                value="{{ old('vehicle') }}" required>
                            @error('vehicle')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Expense Type -->
                        <div class="mb-3 row">
                            <label for="expense_type" class="col-form-label">Expense Type</label>
                            <select class="form-control" name="expense_type" id="expense_type" required>
                                <option value="diesel" {{ old('expense_type') == 'diesel' ? 'selected' : '' }}>Diesel
                                </option>
                                <option value="misc" {{ old('expense_type') == 'misc' ? 'selected' : '' }}>Misc</option>
                                <option value="carriage" {{ old('expense_type') == 'carriage' ? 'selected' : '' }}>Carriage
                                </option>
                                <option value="fare" {{ old('expense_type') == 'fare' ? 'selected' : '' }}>Fare</option>
                            </select>
                            @error('expense_type')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Amount -->
                        <div class="mb-3 row">
                            <label for="amount" class="col-form-label">Amount</label>
                            <input type="number" class="form-control" name="amount" id="amount"
                                value="{{ old('amount', 0) }}" step="0.01" required>
                            @error('amount')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-3 row">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
