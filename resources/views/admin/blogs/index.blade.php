@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blogs</h4>
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary float-end">Add New Blog</a>
                </div><!--end card-header-->

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->author ?? 'Unknown' }}</td>
                                    <td>
                                        <span
                                            class="badge bg-{{ $blog->status == 'published' ? 'success' : ($blog->status == 'draft' ? 'warning' : 'secondary') }}">
                                            {{ ucfirst($blog->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $blog->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
