@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Company Details</h4>
                        </div><!--end col-->
                        <div class="col text-end">
                            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <h5>Name:</h5>
                                <p>{{ $company->name }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Short Name:</h5>
                                <p>{{ $company->short_name }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Email:</h5>
                                <p>{{ $company->email }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Phone:</h5>
                                <p>{{ $company->phone }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Created At:</h5>
                                <p>{{ $company->created_at->format('d M Y, h:i A') }}</p>
                            </div>

                            <div class="mb-3">
                                <h5>Updated At:</h5>
                                <p>{{ $company->updated_at->format('d M Y, h:i A') }}</p>
                            </div>
                        </div>
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
