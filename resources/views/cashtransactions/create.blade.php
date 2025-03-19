@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Create Transaction</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('cashtransactions.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" required value="{{ old('date') }}">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select class="form-control" name="type" id="transaction_type" required>
                                <option value="cash_in" {{ old('type') == 'cash_in' ? 'selected' : '' }}>Cash In</option>
                                <option value="cash_out" {{ old('type') == 'cash_out' ? 'selected' : '' }}>Cash Out</option>
                            </select>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="company_id" class="col-form-label">Company Name</label>
                            <select class="form-control mb-2" name="company_id" id="company">
                                <option value="" selected disabled>Select a Company</option>
                                @foreach ($companies as $company)
                                    <option data-balance="{{ $company->balance }}"
                                        {{ old('company_id') == $company->id ? 'selected' : '' }}
                                        value="{{ $company->id }}">
                                        {{ $company->short_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                            <span class="ps-2">  Balance: <strong id="company_balance" style="color: black;">0</strong></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" step="0.01" class="form-control" name="amount" required
                                value="{{ old('amount') }}">
                            @error('amount')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div id="expense_fields" style="display: none;">
                            <h4>Expense Details</h4>

                            <div class="mb-3">
                                <label class="form-label">Bags</label>
                                <input type="number" class="form-control" name="bags" value="{{ old('bags', 0) }}">
                                @error('bags')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cash Payment</label>
                                <input type="number" step="0.01" class="form-control" name="cash_payment"
                                    value="{{ old('cash_payment', 0) }}">
                                @error('cash_payment')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 row">
                                <label for="vehicle_id" class="col-form-label">Vehicle Name</label>
                                <select class="form-control" name="vehicle_id" id="vehicle" id="">
                                    @foreach ($vehicles as $vehicle)
                                        <option {{ old('vehicle_id') == $vehicle->id ? 'selected' : '' }}
                                            value="{{ $vehicle->id }}">
                                            {{ $vehicle->name }}</option>
                                    @endforeach
                                </select>

                                @error('vehicle_id')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expense Type</label>
                                <select class="form-control" name="expense_type">
                                    <option value="diesel" {{ old('expense_type') == 'diesel' ? 'selected' : '' }}>Diesel
                                    </option>
                                    <option value="misc" {{ old('expense_type') == 'misc' ? 'selected' : '' }}>Misc
                                    </option>
                                    <option value="carriage" {{ old('expense_type') == 'carriage' ? 'selected' : '' }}>
                                        Carriage</option>
                                    <option value="fare" {{ old('expense_type') == 'fare' ? 'selected' : '' }}>Fare
                                    </option>
                                </select>
                                @error('expense_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
@section('js')
    <script>
        document.getElementById('transaction_type').addEventListener('change', function() {
            document.getElementById('expense_fields').style.display = this.value === 'cash_out' ? 'block' : 'none';
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let companySelect = document.getElementById("company");
            let balanceSpan = document.getElementById("company_balance");

            // Function to update balance and color
            function updateBalance() {
                let selectedOption = companySelect.options[companySelect.selectedIndex];
                let balance = parseFloat(selectedOption.getAttribute("data-balance")) || 0;

                // Update balance text
                balanceSpan.textContent = balance;

                // Change color based on balance
                if (balance < 0) {
                    balanceSpan.style.color = "red"; // Negative balance
                } else {
                    balanceSpan.style.color = "green"; // Positive balance
                }
            }

            // Run on change
            companySelect.addEventListener("change", updateBalance);

            // Run on page load if value is already selected
            updateBalance();
        });
    </script>
@endsection
