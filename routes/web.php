<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', [BlogPageController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog:slug}', [BlogDetailController::class, 'show'])->name('blog.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe');

Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');

// Admin Authentication Routes (login/register stay under /admin)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/register', [AdminAuthController::class, 'showRegister'])->name('register');
        Route::post('/register', [AdminAuthController::class, 'register'])->name('register.submit');
        Route::post('/verify-otp', [AdminAuthController::class, 'verifyOtp'])->name('verify-otp');
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });
});

// Redirect legacy /admin root to the new dashboard path
Route::redirect('/admin', '/dashboard');

// Authenticated admin dashboard and resources now live under /dashboard
Route::middleware('admin.auth')->prefix('dashboard')->name('admin.')->group(function () {
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Subscribers
    Route::resource('subscribers', SubscriberController::class);
    Route::get('newsletter/compose', [SubscriberController::class, 'composeNewsletter'])->name('newsletter.compose');
    Route::post('newsletter/send', [SubscriberController::class, 'sendNewsletter'])->name('newsletter.send');

    // Blogs
    Route::resource('blogs', BlogController::class);

    // Contacts/Issues
    Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact:ticket_id}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::post('contacts/{contact:ticket_id}/reply', [AdminContactController::class, 'reply'])->name('contacts.reply');
    Route::patch('contacts/{contact:ticket_id}/status', [AdminContactController::class, 'updateStatus'])->name('contacts.status');
    Route::delete('contacts/{contact:ticket_id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
});
