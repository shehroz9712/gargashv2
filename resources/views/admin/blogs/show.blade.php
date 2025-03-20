@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                </div><!--end card-header-->

                <div class="card-body">
                    @if ($blog->author_image)
                        <div class="text-center mb-3">
                            <img src="{{ asset('storage/' . $blog->author_image) }}" alt="Author Image" class="rounded-circle"
                                width="100">
                        </div>
                    @endif

                    <p class="text-muted text-center">
                        <strong>Author:</strong> {{ $blog->author ?? 'Unknown' }} |
                        <strong>Status:</strong> <span
                            class="badge bg-{{ $blog->status == 'published' ? 'success' : ($blog->status == 'draft' ? 'warning' : 'secondary') }}">
                            {{ ucfirst($blog->status) }}
                        </span>
                    </p>

                    <hr>

                    <div class="blog-content">
                        {!! $blog->content !!}
                    </div>

                    <hr>

                    <div class="text-end">
                        <a href="{{ route('user.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.blogs.destroy', $blog->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('user.blogs.index') }}" class="btn btn-secondary">Back to Blogs</a>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection
