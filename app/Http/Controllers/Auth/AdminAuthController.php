<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\AdminOtpMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminAuthController extends Controller
{
    // Show registration form
    public function showRegister()
    {
        return view('auth.admin-register');
    }

    // Handle registration - Step 1: Send OTP
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $allowedDomains = array_filter(array_map('trim', explode(',', strtolower(env('ADMIN_ALLOWED_DOMAINS', 'techappupdate.com')))));
        $emailDomain = strtolower(substr(strrchr($request->email, '@'), 1));

        // Allow any email belonging to the authorized domain(s)
        if (!in_array($emailDomain, $allowedDomains, true)) {
            return back()->withErrors(['email' => 'This email domain is not authorized for admin registration.']);
        }

        // Check if admin already exists and is verified
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && $admin->isEmailVerified()) {
            return redirect()->route('admin.login')->with('error', 'This email is already registered. Please login.');
        }

        // Generate OTP
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Create or update admin with OTP
        Admin::updateOrCreate(
            ['email' => $request->email],
            [
                'otp' => $otp,
                'otp_expires_at' => now()->addMinutes(10),
            ]
        );

        // Queue OTP email for async delivery
        Mail::to($request->email)->queue(new AdminOtpMail($otp));

        return view('auth.admin-verify-otp', ['email' => $request->email])
            ->with('success', 'OTP has been sent to your email. Please check your inbox.');
    }

    // Verify OTP and complete registration
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'Invalid email address.']);
        }

        if (!$admin->isOtpValid($request->otp)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        // Update admin details and verify email
        $admin->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'email_verified_at' => now(),
            'otp' => null,
            'otp_expires_at' => null,
        ]);

        // Log the admin in
        Auth::guard('admin')->login($admin);

        return redirect()->route('admin.dashboard')->with('success', 'Registration successful! Welcome to the admin panel.');
    }

    // Show login form
    public function showLogin()
    {
        return view('auth.admin-login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !$admin->isEmailVerified()) {
            return back()->withErrors(['email' => 'No verified admin account found with this email.']);
        }

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
