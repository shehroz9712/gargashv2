<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'image' => [
                'nullable',
                File::image()->max(2048), // Max size in kilobytes (2MB)
            ],
            'short_content' => 'required|string',
            'content' => 'required',
            'author' => 'nullable|string|max:255',
            'author_image' => [
                'nullable',
                File::image()->max(2048), // Max size in kilobytes (2MB)
            ],
            'is_featured' => 'nullable|boolean',
            'status' => [
                'required',
                Rule::in(['draft', 'published', 'archived']),
            ],
        ]);

        // Handle file uploads
        if ($request->hasFile('image')) {
            $imagePath = uploadImage($request->file('image'), 'blog_images');
            $validatedData['image'] = $imagePath;
        } else {
            $validatedData['image'] = 'no-image.png';
        }

        if ($request->hasFile('author_image')) {
            $authorImagePath = uploadImage($request->file('author_image'), 'author_images');
            $validatedData['author_image'] = $authorImagePath;
        } else {
            $validatedData['author_image'] = 'no-image.png';
        }


        // Set default values
        $validatedData['is_featured'] = $request->boolean('is_featured', false);
        $validatedData['views'] = 0;

        // Create the blog post
        Blog::create($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'image' => [
                'nullable',
                File::image()->max(2048), // Max size in kilobytes (2MB)
            ],
            'short_content' => 'required|string',
            'content' => 'required',
            'author' => 'nullable|string|max:255',
            'author_image' => [
                'nullable',
                File::image()->max(2048), // Max size in kilobytes (2MB)
            ],
            'is_featured' => 'nullable|boolean',
            'status' => [
                'required',
                Rule::in(['draft', 'published', 'archived']),
            ],
        ]);

        // Handle file uploads
        if ($request->hasFile('image')) {
            $imagePath = uploadImage($request->file('image'), 'blog_images');
            $validatedData['image'] = $imagePath;

            // Delete old image if it exists and is not the default one
            if ($blog->image && $blog->image !== 'no-image.png') {
                Storage::delete('public/blog_images/' . $blog->image);
            }
        }

        if ($request->hasFile('author_image')) {
            $authorImagePath = uploadImage($request->file('author_image'), 'author_images');
            $validatedData['author_image'] = $authorImagePath;

            // Delete old author image if it exists and is not the default one
            if ($blog->author_image && $blog->author_image !== 'no-image.png') {
                Storage::delete('public/author_images/' . $blog->author_image);
            }
        }

        // Update the blog post
        $blog->update($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
