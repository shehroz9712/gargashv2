@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">expenses</h4>
                        </div><!--end col-->
                        <div class="col-auto">
                            <a href="{{ route('expenses.create') }}" class="btn bg-primary-subtle text-primary"><i
                                    class="fas fa-plus me-1"></i> Add Expenses</a>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0" id="datatable_1">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->title }}</td>
                                        <td>{{ $expense->company }}</td>
                                        <td>{{ $expense->type }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>
                                            <a href="{{ route('expenses.edit', $expense->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('expenses.show', $expense->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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
