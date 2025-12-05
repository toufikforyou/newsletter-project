<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Subscriber;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'total_subscribers' => Subscriber::count(),
            'active_subscribers' => Subscriber::active()->count(),
            'total_blogs' => Blog::count(),
            'published_blogs' => Blog::published()->count(),
            'total_contacts' => Contact::count(),
            'open_contacts' => Contact::open()->count(),
        ];

        $recentSubscribers = Subscriber::latest()->take(5)->get();
        $recentContacts = Contact::latest()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentSubscribers', 'recentContacts', 'recentBlogs'));
    }
}
