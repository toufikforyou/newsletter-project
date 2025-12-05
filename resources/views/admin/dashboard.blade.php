@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- Subscribers Card -->
        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-600 text-sm font-medium">Total Subscribers</p>
                    <p class="text-3xl font-bold text-slate-900 mt-2">{{ $stats['total_subscribers'] }}</p>
                    <p class="text-xs text-blue-600 mt-2">{{ $stats['active_subscribers'] }} active</p>
                </div>
                <div class="p-4 bg-blue-100 rounded-lg">
                    <span class="material-icons text-blue-600 text-3xl">mail</span>
                </div>
            </div>
        </div>

        <!-- Blog Posts Card -->
        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-emerald-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-600 text-sm font-medium">Blog Posts</p>
                    <p class="text-3xl font-bold text-slate-900 mt-2">{{ $stats['total_blogs'] }}</p>
                    <p class="text-xs text-emerald-600 mt-2">{{ $stats['published_blogs'] }} published</p>
                </div>
                <div class="p-4 bg-emerald-100 rounded-lg">
                    <span class="material-icons text-emerald-600 text-3xl">article</span>
                </div>
            </div>
        </div>

        <!-- Contacts Card -->
        <div class="bg-white rounded-lg shadow p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-600 text-sm font-medium">Contact Issues</p>
                    <p class="text-3xl font-bold text-slate-900 mt-2">{{ $stats['total_contacts'] }}</p>
                    <p class="text-xs text-orange-600 mt-2">{{ $stats['open_contacts'] }} open</p>
                </div>
                <div class="p-4 bg-orange-100 rounded-lg">
                    <span class="material-icons text-orange-600 text-3xl">feedback</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Subscribers -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-lg font-bold text-slate-900">Recent Subscribers</h2>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentSubscribers as $subscriber)
                    <div class="p-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium text-slate-900">{{ $subscriber->name ?? 'N/A' }}</p>
                                <p class="text-xs text-slate-500">{{ $subscriber->email }}</p>
                                <div class="mt-2">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium"
                                        :class="{
                                            'bg-green-100 text-green-700': $subscriber->status === 'active',
                                            'bg-gray-100 text-gray-700': $subscriber->status === 'unsubscribed',
                                            'bg-red-100 text-red-700': $subscriber->status === 'bounced',
                                        }">
                                        {{ ucfirst($subscriber->status) }}
                                    </span>
                                </div>
                            </div>
                            <a href="{{ route('admin.subscribers.edit', $subscriber) }}" class="text-blue-600 hover:text-blue-700">
                                <span class="material-icons">edit</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center text-slate-500">
                        No subscribers yet
                    </div>
                @endforelse
            </div>
            <div class="p-4 border-t border-slate-100 text-center">
                <a href="{{ route('admin.subscribers.index') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View All Subscribers →</a>
            </div>
        </div>

        <!-- Recent Contacts -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-lg font-bold text-slate-900">Recent Issues</h2>
            </div>
            <div class="divide-y divide-slate-100">
                @forelse($recentContacts as $contact)
                    <div class="p-4 hover:bg-slate-50 transition-colors">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium text-slate-900">{{ $contact->full_name }}</p>
                                <p class="text-xs text-slate-500">{{ $contact->ticket_id }}</p>
                                <p class="text-xs text-slate-600 mt-1">{{ $contact->subject }}</p>
                                <div class="mt-2">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium"
                                        :class="{
                                            'bg-red-100 text-red-700': $contact->status === 'open',
                                            'bg-yellow-100 text-yellow-700': $contact->status === 'in_progress',
                                            'bg-green-100 text-green-700': $contact->status === 'resolved',
                                            'bg-gray-100 text-gray-700': $contact->status === 'closed',
                                        }">
                                        {{ ucfirst(str_replace('_', ' ', $contact->status)) }}
                                    </span>
                                </div>
                            </div>
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="text-blue-600 hover:text-blue-700">
                                <span class="material-icons">open_in_new</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-4 text-center text-slate-500">
                        No contacts yet
                    </div>
                @endforelse
            </div>
            <div class="p-4 border-t border-slate-100 text-center">
                <a href="{{ route('admin.contacts.index') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View All Issues →</a>
            </div>
        </div>
    </div>

    <!-- Recent Blog Posts -->
    <div class="mt-8 bg-white rounded-lg shadow">
        <div class="p-6 border-b border-slate-100">
            <h2 class="text-lg font-bold text-slate-900">Recent Blog Posts</h2>
        </div>
        <div class="divide-y divide-slate-100">
            @forelse($recentBlogs as $blog)
                <div class="p-4 hover:bg-slate-50 transition-colors">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <p class="font-medium text-slate-900">{{ $blog->title }}</p>
                            <p class="text-xs text-slate-500 mt-1">By {{ $blog->author_name }} • {{ $blog->category }}</p>
                            <div class="mt-2 flex items-center gap-3">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium"
                                    :class="{
                                        'bg-blue-100 text-blue-700': $blog->status === 'published',
                                        'bg-gray-100 text-gray-700': $blog->status === 'draft',
                                        'bg-red-100 text-red-700': $blog->status === 'archived',
                                    }">
                                    {{ ucfirst($blog->status) }}
                                </span>
                                @if($blog->published_at)
                                    <span class="text-xs text-slate-500">{{ $blog->published_at->format('M d, Y') }}</span>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600 hover:text-blue-700">
                            <span class="material-icons">edit</span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="p-4 text-center text-slate-500">
                    No blog posts yet
                </div>
            @endforelse
        </div>
        <div class="p-4 border-t border-slate-100 text-center">
            <a href="{{ route('admin.blogs.index') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View All Blog Posts →</a>
        </div>
    </div>
@endsection
