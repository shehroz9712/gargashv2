@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Users Details</h4>
                        </div><!--end col-->
                        <div class="col-auto">
                            <a href="{{ route('companies.create') }}" class="btn bg-primary-subtle text-primary"><i
                                    class="fas fa-plus me-1"></i> Add
                                    Company</a>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0" id="datatable_1">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Short Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->short_name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->phone }}</td>
                                        <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                        <td>
                                            <!-- View -->
                                            <a href="{{ route('companies.show', $company->id) }}">
                                                <i class="las la-eye text-secondary fs-18"></i>
                                            </a>
                                        
                                            <!-- Edit -->
                                            <a href="{{ route('companies.edit', $company->id) }}">
                                                <i class="las la-pen text-secondary fs-18"></i>
                                            </a>
                                        
                                            <!-- Delete -->
                                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" style="border: none; background: none;">
                                                    <i class="las la-trash-alt text-secondary fs-18"></i>
                                                </button>
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
