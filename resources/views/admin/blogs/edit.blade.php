@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Edit Blog</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->

                <div class="card-body pt-0">
                    <form action="{{ route('user.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Title -->
                                <div class="mb-3 row">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        value="{{ old('title', $blog->title) }}" required>
                                    @error('title')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Content (Text Editor) -->
                                <div class="mb-3 row">
                                    <label for="content" class="col-form-label">Content</label>
                                    <textarea class="form-control" name="content" id="content" rows="5" required>{{ old('content', $blog->content) }}</textarea>
                                    @error('content')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Author -->
                                <div class="mb-3 row">
                                    <label for="author" class="col-form-label">Author</label>
                                    <input type="text" class="form-control" name="author" id="author"
                                        value="{{ old('author', $blog->author) }}">
                                    @error('author')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Author Image -->
                                <div class="mb-3 row">
                                    <label for="author_image" class="col-form-label">Author Image</label>
                                    <input type="file" class="form-control" name="author_image" id="author_image"
                                        accept="image/*">
                                    @if ($blog->author_image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $blog->author_image) }}" alt="Author Image"
                                                width="100">
                                        </div>
                                    @endif
                                    @error('author_image')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="mb-3 row">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="draft"
                                            {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                        <option value="published"
                                            {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published
                                        </option>
                                        <option value="archived"
                                            {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-12 text-end">
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            plugins: 'lists link image table code help wordcount',
            toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
            height: 300
        });
    </script>
@endsection
