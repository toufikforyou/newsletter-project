<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - TechNews</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900 font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white shadow-lg fixed h-screen overflow-y-auto">
            <div class="p-6 border-b border-slate-800">
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold tracking-tight">
                    Admin<span class="text-blue-400">Panel</span>
                </a>
                <p class="text-sm text-slate-400 mt-2">TechNews Management</p>
            </div>

            <nav class="p-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600' : '' }}">
                    <span class="material-icons">dashboard</span>
                    <span>Dashboard</span>
                </a>

                <div class="pt-4">
                    <p class="text-xs font-semibold text-slate-400 px-4 mb-3">CONTENT</p>
                    <a href="{{ route('admin.subscribers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.subscribers.*') ? 'bg-blue-600' : '' }}">
                        <span class="material-icons">mail</span>
                        <span>Subscribers</span>
                    </a>

                    <a href="{{ route('admin.blogs.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.blogs.*') ? 'bg-blue-600' : '' }}">
                        <span class="material-icons">article</span>
                        <span>Blog Posts</span>
                    </a>

                    <a href="{{ route('admin.contacts.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.contacts.*') ? 'bg-blue-600' : '' }}">
                        <span class="material-icons">feedback</span>
                        <span>Contacts & Issues</span>
                    </a>
                </div>

                <div class="pt-4">
                    <p class="text-xs font-semibold text-slate-400 px-4 mb-3">NEWSLETTER</p>
                    <a href="{{ route('admin.newsletter.compose') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.newsletter.*') ? 'bg-blue-600' : '' }}">
                        <span class="material-icons">send</span>
                        <span>Compose & Send</span>
                    </a>
                </div>

                <div class="pt-4 border-t border-slate-800">
                    <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors {{ request()->routeIs('admin.profile.*') ? 'bg-blue-600' : '' }}">
                        <span class="material-icons">person</span>
                        <span>Profile Settings</span>
                    </a>
                    
                    <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 transition-colors">
                        <span class="material-icons">logout</span>
                        <span>View Site</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64">
            <!-- Top Bar -->
            <header class="bg-white border-b border-slate-200 shadow-sm sticky top-0 z-10">
                <div class="px-8 py-4 flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-slate-900">@yield('page_title', 'Dashboard')</h1>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-3 px-4 py-2 bg-slate-50 rounded-lg">
                            @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->profile_picture)
                                <img src="{{ asset('storage/' . Auth::guard('admin')->user()->profile_picture) }}" alt="Profile" class="w-8 h-8 rounded-full object-cover">
                            @else
                                <span class="material-icons text-slate-600">account_circle</span>
                            @endif
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-slate-900">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
                                <span class="text-xs text-slate-500">{{ ucfirst(Auth::guard('admin')->user()->role ?? 'admin') }}</span>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition text-sm font-semibold shadow-sm">
                                <span class="material-icons text-base">logout</span>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-8">
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center gap-3">
                        <span class="material-icons">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center gap-3">
                        <span class="material-icons">error</span>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
