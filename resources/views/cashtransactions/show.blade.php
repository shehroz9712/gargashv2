@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Transaction Details</h4>
                        </div><!--end col-->
                        <div class="col text-end">
                            <a href="{{ route('daily.balances.detail', encrypt($transactions->daily_balances_id)) }}"
                                class="btn btn-secondary">Back to List</a>
                        </div>
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <h5>Date:</h5>
                                <p>{{ $transactions->date }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Type:</h5>
                                <p>{{ ucfirst($transactions->type) }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Amount:</h5>
                                <p>{{ number_format($transactions->amount, 2) }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Description:</h5>
                                <p>{{ $transactions->description ?? 'N/A' }}</p>
                            </div>


                            <div class="mb-3">
                                <h5>Created At:</h5>
                                <p>{{ $transactions->created_at->format('d M Y, h:i A') }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Updated At:</h5>
                                <p>{{ $transactions->updated_at->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Show Expense details only if the transaction type is 'cash_out' -->
                            @if ($transactions->type === 'cash_out' && $transactions->expense)
                                <div class="col">
                                    <h4 class="card-title">Expense Details</h4>
                                </div>
                                <div class="mb-3">
                                    <h5>Title:</h5>
                                    <p>{{ $transactions->expense->title }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Company:</h5>
                                    <p>{{ $transactions->expense->company->name }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Bags:</h5>
                                    <p>{{ $transactions->expense->bags }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Cash Payment:</h5>
                                    <p>{{ number_format($transactions->expense->cash_payment, 2) }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Vehicle:</h5>
                                    <p>{{ $transactions->expense->vehicle }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Expense Type:</h5>
                                    <p>{{ ucfirst($transactions->expense->expense_type) }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Amount:</h5>
                                    <p>{{ number_format($transactions->expense->amount, 2) }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Created At:</h5>
                                    <p>{{ $transactions->expense->created_at->format('d M Y, h:i A') }}</p>
                                </div>

                                <div class="mb-3">
                                    <h5>Updated At:</h5>
                                    <p>{{ $transactions->expense->updated_at->format('d M Y, h:i A') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end card-body-->
    </div><!--end col-->
@endsection
