@extends('admin.layout')

@section('title', 'Manage Subscribers')
@section('page_title', 'Subscribers')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-slate-600">Manage your newsletter subscribers</p>
        </div>
        <a href="{{ route('admin.subscribers.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
            <span class="material-icons text-sm">add</span>
            Add Subscriber
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <form method="GET" class="flex gap-4 flex-wrap">
            <input type="text" name="search" placeholder="Search by email or name..." value="{{ request('search') }}" class="flex-1 min-w-64 px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
            <select name="status" class="px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                <option value="">All Status</option>
                <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                <option value="unsubscribed" {{ request('status') === 'unsubscribed' ? 'selected' : '' }}>Unsubscribed</option>
                <option value="bounced" {{ request('status') === 'bounced' ? 'selected' : '' }}>Bounced</option>
            </select>
            <button type="submit" class="px-6 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-medium inline-flex items-center gap-2">
                <span class="material-icons text-sm">search</span>
                Filter
            </button>
        </form>
    </div>

    <!-- Subscribers Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Subscribed</th>
                    <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($subscribers as $subscriber)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm">
                            <div class="font-medium text-slate-900">{{ $subscriber->email }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $subscriber->name ?? '<span class="text-slate-400 italic">Not provided</span>' }}
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium"
                                @if($subscriber->status === 'active')
                                    style="background-color: #dcfce7; color: #166534;"
                                @elseif($subscriber->status === 'unsubscribed')
                                    style="background-color: #f3f4f6; color: #374151;"
                                @else
                                    style="background-color: #fee2e2; color: #991b1b;"
                                @endif
                            >
                                {{ ucfirst($subscriber->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            <div class="flex items-center gap-1">
                                <span class="material-icons text-sm text-blue-600">calendar_today</span>
                                {{ $subscriber->subscribed_at->format('M d, Y') }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right text-sm space-x-2">
                            <a href="{{ route('admin.subscribers.edit', $subscriber) }}" class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-colors text-xs font-medium">
                                <span class="material-icons text-sm">edit</span>
                            </a>
                            <form method="POST" action="{{ route('admin.subscribers.destroy', $subscriber) }}" class="inline" onsubmit="return confirm('Are you sure? This cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition-colors text-xs font-medium">
                                    <span class="material-icons text-sm">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <span class="material-icons text-5xl text-slate-300">mail_outline</span>
                                <p class="text-slate-500 font-medium">No subscribers found</p>
                                <a href="{{ route('admin.subscribers.create') }}" class="text-blue-600 hover:underline text-sm font-medium">Add your first subscriber</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $subscribers->links() }}
    </div>
@endsection
