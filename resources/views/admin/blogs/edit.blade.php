@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Blog</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title', $blog->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug"
                                value="{{ old('slug', $blog->slug) }}" required>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Blog Image</label>
                            <input type="file" class="form-control" name="image" id="image" accept="image/*">
                            @if ($blog->image)
                                <img src="{{ asset('assets/uploads/blog_images/' . $blog->image) }}" alt="Blog Image"
                                    class="img-thumbnail mt-2" width="150">
                            @endif
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Short Content -->
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content</label>
                            <textarea class="form-control" name="short_content" id="short_content" rows="3" required>{{ old('short_content', $blog->short_content) }}</textarea>
                            @error('short_content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="5" required>{{ old('content', $blog->content) }}</textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" id="author"
                                value="{{ old('author', $blog->author) }}">
                            @error('author')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Author Image -->
                        <div class="mb-3">
                            <label for="author_image" class="form-label">Author Image</label>
                            <input type="file" class="form-control" name="author_image" id="author_image"
                                accept="image/*">
                            @if ($blog->author_image)
                                <img src="{{ asset('assets/uploads/blog_images/' . $blog->author_image) }}"
                                    alt="Author Image" class="img-thumbnail mt-2" width="100">
                            @endif
                            @error('author_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Is Featured -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_featured" id="is_featured"
                                value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }}>
                            <label for="is_featured" class="form-check-label">Is Featured</label>
                            @error('is_featured')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>
                                    Draft</option>
                                <option value="published"
                                    {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                <option value="archived"
                                    {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.tiny.cloud/1/angawkv2xx2vxc4g4fmmz2kga206yrhmrnuu1i2avvbr1n6d/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            plugins: 'lists link image table code help wordcount',
            toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
            height: 300,
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                });
            }
        });
    </script>
@endsection
