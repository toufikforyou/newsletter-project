@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    @php
        $activeRate = $stats['total_subscribers'] > 0 ? round(($stats['active_subscribers'] / $stats['total_subscribers']) * 100) : 0;
        $publishRate = $stats['total_blogs'] > 0 ? round(($stats['published_blogs'] / $stats['total_blogs']) * 100) : 0;
        $openRate = $stats['total_contacts'] > 0 ? round(($stats['open_contacts'] / $stats['total_contacts']) * 100) : 0;
    @endphp

    <!-- Header / Summary -->
    <div class="bg-gradient-to-r from-slate-900 via-indigo-900 to-blue-800 text-white rounded-2xl p-8 mb-10 shadow-lg">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <p class="text-sm uppercase tracking-[0.2em] text-white/70">Admin Overview</p>
                <h1 class="text-3xl md:text-4xl font-bold mt-2">Performance Snapshot</h1>
                <p class="text-white/80 mt-2">Quick view of subscribers, content, and support health.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center gap-2 bg-white text-slate-900 px-4 py-2 rounded-lg font-semibold shadow hover:-translate-y-0.5 transition">
                    <span class="material-icons text-base">add</span> New Post
                </a>
                <a href="{{ route('admin.subscribers.index') }}" class="inline-flex items-center gap-2 border border-white/30 text-white px-4 py-2 rounded-lg font-semibold hover:bg-white/10 transition">
                    <span class="material-icons text-base">people</span> Manage Audience
                </a>
            </div>
        </div>
    </div>

    <!-- KPI Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-10">
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-slate-500">Total Subscribers</p>
                <span class="material-icons text-blue-500">mail</span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['total_subscribers'] }}</p>
            <p class="text-sm text-blue-600 mt-2">{{ $stats['active_subscribers'] }} active ({{ $activeRate }}%)</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-slate-500">Content</p>
                <span class="material-icons text-emerald-500">article</span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['total_blogs'] }}</p>
            <p class="text-sm text-emerald-600 mt-2">{{ $stats['published_blogs'] }} published ({{ $publishRate }}%)</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-slate-500">Support Tickets</p>
                <span class="material-icons text-orange-500">support_agent</span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['total_contacts'] }}</p>
            <p class="text-sm text-orange-600 mt-2">{{ $stats['open_contacts'] }} open ({{ $openRate }}%)</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-slate-500">Publishing Pace</p>
                <span class="material-icons text-indigo-500">speed</span>
            </div>
            <p class="text-3xl font-bold text-slate-900">{{ $stats['published_blogs'] }}</p>
            <p class="text-sm text-indigo-600 mt-2">Published in total</p>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        <!-- Recent Subscribers -->
        <div class="xl:col-span-2 bg-white rounded-xl shadow-sm border border-slate-100">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-slate-900">Recent Subscribers</h2>
                    <p class="text-sm text-slate-500">Latest sign-ups and status</p>
                </div>
                <a href="{{ route('admin.subscribers.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">View all</a>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentSubscribers as $subscriber)
                    @php
                        $subStatus = $subscriber->status;
                        $subClass = match($subStatus) {
                            'active' => 'bg-emerald-100 text-emerald-700',
                            'unsubscribed' => 'bg-slate-100 text-slate-700',
                            'bounced' => 'bg-red-100 text-red-700',
                            default => 'bg-slate-100 text-slate-700',
                        };
                    @endphp
                    <div class="p-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <p class="font-semibold text-slate-900">{{ $subscriber->name ?? 'N/A' }}</p>
                                <p class="text-xs text-slate-500">{{ $subscriber->email }}</p>
                                <div class="mt-2 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $subClass }}">
                                    {{ ucfirst($subscriber->status) }}
                                </div>
                            </div>
                            <a href="{{ route('admin.subscribers.edit', $subscriber) }}" class="text-blue-600 hover:text-blue-700">
                                <span class="material-icons text-base">edit</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-6 text-center text-slate-500">No subscribers yet</div>
                @endforelse
            </div>
        </div>

        <!-- Support Queue -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-100">
            <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-slate-900">Support Queue</h2>
                    <p class="text-sm text-slate-500">Latest inbound requests</p>
                </div>
                <a href="{{ route('admin.contacts.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">View all</a>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentContacts as $contact)
                    @php
                        $status = $contact->status;
                        $statusClass = match($status) {
                            'open' => 'bg-red-100 text-red-700',
                            'in_progress' => 'bg-amber-100 text-amber-700',
                            'resolved' => 'bg-emerald-100 text-emerald-700',
                            'closed' => 'bg-slate-100 text-slate-700',
                            default => 'bg-slate-100 text-slate-700',
                        };
                        $statusLabel = ucfirst(str_replace('_', ' ', $status));
                    @endphp
                    <div class="p-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-start justify-between gap-3">
                            <div class="space-y-1">
                                <p class="font-semibold text-slate-900">{{ $contact->full_name }}</p>
                                <p class="text-xs text-slate-500">Ticket {{ $contact->ticket_id }}</p>
                                <p class="text-sm text-slate-600">{{ $contact->subject }}</p>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $statusClass }}">{{ $statusLabel }}</span>
                            </div>
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="text-blue-600 hover:text-blue-700">
                                <span class="material-icons text-base">open_in_new</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-6 text-center text-slate-500">No contacts yet</div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Recent Blog Posts -->
    <div class="mt-10 bg-white rounded-xl shadow-sm border border-slate-100">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-bold text-slate-900">Latest Content</h2>
                <p class="text-sm text-slate-500">Recent blog activity</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">View all</a>
        </div>
        <div class="divide-y divide-slate-100">
            @forelse($recentBlogs as $blog)
                @php
                    $blogStatus = $blog->status;
                    $blogStatusClass = match($blogStatus) {
                        'published' => 'bg-blue-100 text-blue-700',
                        'draft' => 'bg-slate-100 text-slate-700',
                        'archived' => 'bg-red-100 text-red-700',
                        default => 'bg-slate-100 text-slate-700',
                    };
                @endphp
                <div class="p-4 hover:bg-slate-50 transition-colors">
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex-1 space-y-1">
                            <p class="font-semibold text-slate-900">{{ $blog->title }}</p>
                            <p class="text-xs text-slate-500">By {{ $blog->author_name }} • {{ $blog->category }}</p>
                            <div class="flex items-center gap-3 mt-2">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $blogStatusClass }}">{{ ucfirst($blog->status) }}</span>
                                @if($blog->published_at)
                                    <span class="text-xs text-slate-500">{{ $blog->published_at->format('M d, Y') }}</span>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600 hover:text-blue-700">
                            <span class="material-icons text-base">edit</span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="p-6 text-center text-slate-500">No blog posts yet</div>
            @endforelse
        </div>
    </div>
@endsection
