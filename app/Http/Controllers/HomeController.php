<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $latestBlogs = Blog::where('status', 'published')
              ->latest('published_at')
              ->take(3)
            ->get();

        return view('home', compact('latestBlogs'));
    }
}
