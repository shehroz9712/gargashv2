@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Daily Balance</h4>
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0" id="datatable_1">
                            <thead class="table-light">

                                <tr>
                                    <th>Date</th>
                                    <th>Opening Balance</th>
                                    <th>Cash In</th>
                                    <th>Cash Out</th>
                                        <th>Closing Balance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($balances as $balance)
                                    <tr>
                                        <td>{{ $balance->date }}</td>
                                        <td>{{ $balance->opening_balance }}</td>
                                        <td>{{ $balance->cash_in }}</td>
                                        <td>{{ $balance->cash_out }}</td>
                                        <td>{{ $balance->closing_balance ?? 'N/A' }}</td>
                                        <td>{{ ucfirst($balance->status) }}</td>
                                        <td>
                                            <a href="{{ route('daily.balances.detail', encrypt($balance->id)) }}"
                                                title="show detail">
                                                <i class="las la-eye text-secondary fs-18"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
