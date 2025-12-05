<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP - Admin Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <!-- Logo/Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-600 rounded-full mb-4">
                    <span class="material-icons text-white text-3xl">mark_email_read</span>
                </div>
                <h1 class="text-3xl font-bold text-slate-900">Verify OTP</h1>
                <p class="text-slate-600 mt-2">We've sent a 6-digit code to</p>
                <p class="text-blue-600 font-semibold">{{ $email }}</p>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center gap-3">
                    <span class="material-icons">check_circle</span>
                    {{ session('success') }}
                </div>
            @endif

            <!-- OTP Verification Form -->
            <form method="POST" action="{{ route('admin.verify-otp') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">

                <div class="mb-6">
                    <label for="otp" class="block text-sm font-semibold text-slate-900 mb-2">OTP Code</label>
                    <input type="text" name="otp" id="otp" maxlength="6" required autofocus
                        class="w-full px-4 py-3 text-center text-2xl font-bold tracking-widest border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all @error('otp') border-red-500 @enderror"
                        placeholder="000000">
                    @error('otp')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-slate-900 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all @error('name') border-red-500 @enderror"
                        placeholder="John Doe">
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-slate-900 mb-2">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all @error('password') border-red-500 @enderror"
                        placeholder="Minimum 8 characters">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-semibold text-slate-900 mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                        placeholder="Re-enter password">
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                    <span>Complete Registration</span>
                    <span class="material-icons">check_circle</span>
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-slate-600">
                    OTP expires in 10 minutes
                </p>
            </div>
        </div>

        <p class="text-center text-white text-sm mt-6">
            © {{ date('Y') }} TechNews Admin Panel
        </p>
    </div>
</body>
</html>
