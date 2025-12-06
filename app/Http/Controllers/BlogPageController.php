<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogPageController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('blog', compact('blogs'));
    }
}
