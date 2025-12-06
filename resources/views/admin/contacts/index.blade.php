@extends('admin.layout')

@section('title', 'Contact Issues')
@section('page_title', 'Contact Issues & Messages')

@section('content')
    <div class="mb-6">
        <p class="text-slate-600">Manage customer inquiries and support tickets</p>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <form method="GET" class="flex gap-4 flex-wrap">
            <input type="text" name="search" placeholder="Search by email, name, or ticket ID..." value="{{ request('search') }}" class="flex-1 min-w-64 px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
            <select name="status" class="px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                <option value="">All Status</option>
                <option value="open" {{ request('status') === 'open' ? 'selected' : '' }}>Open</option>
                <option value="in_progress" {{ request('status') === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="resolved" {{ request('status') === 'resolved' ? 'selected' : '' }}>Resolved</option>
                <option value="closed" {{ request('status') === 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
            <button type="submit" class="px-6 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-medium inline-flex items-center gap-2">
                <span class="material-icons text-sm">search</span>
                Filter
            </button>
        </form>
    </div>

    <!-- Contacts Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Ticket ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">From</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Subject</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Received</th>
                    <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($contacts as $contact)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm text-blue-600 font-mono font-medium">
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="hover:underline">{{ $contact->ticket_id }}</a>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <div class="text-slate-900 font-medium">{{ $contact->full_name }}</div>
                            <div class="text-xs text-slate-500">{{ $contact->email }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            <div class="max-w-xs">{{ Str::limit($contact->subject, 60) }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium"
                                @if($contact->status === 'open')
                                    style="background-color: #fee2e2; color: #991b1b;"
                                @elseif($contact->status === 'in_progress')
                                    style="background-color: #fef3c7; color: #92400e;"
                                @elseif($contact->status === 'resolved')
                                    style="background-color: #dcfce7; color: #166534;"
                                @else
                                    style="background-color: #f3f4f6; color: #374151;"
                                @endif
                            >
                                <span class="material-icons text-xs mr-1" style="font-size: 14px;">
                                    @if($contact->status === 'open')
                                        mail
                                    @elseif($contact->status === 'in_progress')
                                        schedule
                                    @elseif($contact->status === 'resolved')
                                        check_circle
                                    @else
                                        done_all
                                    @endif
                                </span>
                                {{ ucfirst(str_replace('_', ' ', $contact->status)) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            <div class="flex items-center gap-1">
                                <span class="material-icons text-sm text-slate-400">schedule</span>
                                {{ $contact->created_at->format('M d, Y') }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right text-sm space-x-2">
                            <a href="{{ route('admin.contacts.show', $contact) }}" class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-colors text-xs font-medium">
                                <span class="material-icons text-sm">open_in_new</span>
                            </a>
                            <form method="POST" action="{{ route('admin.contacts.destroy', $contact) }}" class="inline" onsubmit="return confirm('Are you sure? This cannot be undone.')">
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
                        <td colspan="6" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <span class="material-icons text-5xl text-slate-300">inbox</span>
                                <p class="text-slate-500 font-medium">No contact messages found</p>
                                <p class="text-slate-400 text-sm">Customer inquiries will appear here</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $contacts->links() }}
    </div>
@endsection
