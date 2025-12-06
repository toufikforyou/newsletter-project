<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogDetailController extends Controller
{
    public function show(Blog $blog): View
    {
        // Only show published blogs
        if ($blog->status !== 'published') {
            abort(404);
        }

        // Show latest published blogs excluding the current one
        $relatedBlogs = Blog::where('status', 'published')
            ->where('id', '!=', $blog->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('blog-detail', compact('blog', 'relatedBlogs'));
    }
}
