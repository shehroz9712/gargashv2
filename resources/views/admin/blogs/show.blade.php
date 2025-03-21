@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                </div><!--end card-header-->

                <div class="card-body">
                    @if ($blog->image)
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/uploads/blog_images/' . $blog->image) }}" alt="Blog Image"
                                class="img-fluid rounded" width="300">
                        </div>
                    @endif

                    <p class="text-muted text-center">
                        <strong>Author:</strong> {{ $blog->author ?? 'Unknown' }} |
                        <strong>Status:</strong>
                        <span
                            class="badge bg-{{ $blog->status == 'published' ? 'success' : ($blog->status == 'draft' ? 'warning' : 'secondary') }}">
                            {{ ucfirst($blog->status) }}
                        </span>
                    </p>

                    @if ($blog->author_image)
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/uploads/author_images/' . $blog->author_image) }}" alt="Author Image"
                                class="rounded-circle img-thumbnail" width="100">
                        </div>
                    @endif

                    <hr>

                    <div class="blog-content">
                        {!! $blog->content !!}
                    </div>

                    <hr>

                    <div class="text-end">
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back to Blogs</a>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
