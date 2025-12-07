<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            @php
                $allowedDomains = array_values(array_filter(array_map('trim', explode(',', env('ADMIN_ALLOWED_DOMAINS', 'techappupdate.com')))));
                $allowedDomainsLabel = implode(', ', $allowedDomains);
                $exampleEmail = 'admin@' . ($allowedDomains[0] ?? 'yourdomain.com');
            @endphp
            <!-- Logo/Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-4">
                    <span class="material-icons text-white text-3xl">admin_panel_settings</span>
                </div>
                <h1 class="text-3xl font-bold text-slate-900">Admin Registration</h1>
                <p class="text-slate-600 mt-2">Use an email from an authorized domain to continue.</p>
            </div>

            @if (session('error'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center gap-3">
                    <span class="material-icons">error</span>
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center gap-3">
                    <span class="material-icons">check_circle</span>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Registration Form -->
            <form method="POST" action="{{ route('admin.register.submit') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-slate-900 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all @error('email') border-red-500 @enderror"
                        placeholder="{{ $exampleEmail }}">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-slate-500 mt-2">
                        <span class="material-icons text-xs align-middle">info</span>
                        Allowed domains: {{ $allowedDomainsLabel }}
                    </p>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                    <span>Send OTP</span>
                    <span class="material-icons">send</span>
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-slate-600">
                    Already have an account?
                    <a href="{{ route('admin.login') }}" class="text-blue-600 hover:underline font-semibold">Login here</a>
                </p>
            </div>
        </div>

        <p class="text-center text-white text-sm mt-6">
            © {{ date('Y') }} TechNews Admin Panel
        </p>
    </div>
</body>
</html>
