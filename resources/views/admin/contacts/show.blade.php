@extends('admin.layout')

@section('title', 'Contact Issue #' . $contact->ticket_id)
@section('page_title', 'Contact Issue #' . $contact->ticket_id)

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.contacts.index') }}" class="text-slate-600 hover:text-slate-900 inline-flex items-center gap-1">
            <span class="material-icons text-sm">arrow_back</span>
            Back to Contacts
        </a>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <!-- Contact Details -->
        <div class="col-span-2">
            <!-- Contact Information Card -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Ticket ID</label>
                        <div class="text-lg font-mono font-bold text-blue-600">{{ $contact->ticket_id }}</div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Received</label>
                        <div class="text-lg text-slate-900">{{ $contact->created_at->format('M d, Y - g:i A') }}</div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">From Name</label>
                        <div class="text-slate-900">{{ $contact->full_name }}</div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Email</label>
                        <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline">{{ $contact->email }}</a>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Subject</label>
                    <div class="text-slate-900">{{ $contact->subject }}</div>
                </div>
            </div>

            <!-- Message Card -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h3 class="text-sm font-semibold text-slate-900 mb-4">Message</h3>
                <div class="text-slate-700 whitespace-pre-wrap font-light leading-relaxed">{{ $contact->message }}</div>
            </div>

            <!-- Reply Form -->
            @if($contact->status !== 'closed')
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-sm font-semibold text-slate-900 mb-4">Send Reply</h3>
                    <form method="POST" action="{{ route('admin.contacts.reply', $contact) }}">
                        @csrf
                        <div class="mb-4">
                            <label for="reply_message" class="block text-sm font-medium text-slate-900 mb-2">Your Reply</label>
                            <textarea name="reply_message" id="reply_message" rows="8" placeholder="Type your response..." class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('reply_message') border-red-500 @enderror" required></textarea>
                            @error('reply_message')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex gap-3">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium inline-flex items-center gap-2">
                                <span class="material-icons text-sm">send</span>
                                Send Reply
                            </button>
                        </div>
                    </form>
                </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-span-1">
            <!-- Status Card -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h3 class="text-sm font-semibold text-slate-900 mb-4">Status</h3>
                <form method="POST" action="{{ route('admin.contacts.status', $contact) }}" class="space-y-3">
                    @csrf
                    @method('PATCH')
                    <select name="status" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                        <option value="open" {{ $contact->status === 'open' ? 'selected' : '' }}>Open</option>
                        <option value="in_progress" {{ $contact->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="resolved" {{ $contact->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                        <option value="closed" {{ $contact->status === 'closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                    <button type="submit" class="w-full px-4 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-medium">
                        Update Status
                    </button>
                </form>

                <!-- Status Badge -->
                <div class="mt-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium"
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

            <!-- Admin Notes Card -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h3 class="text-sm font-semibold text-slate-900 mb-4">Admin Notes</h3>
                <form method="POST" action="{{ route('admin.contacts.status', $contact) }}" class="space-y-3">
                    @csrf
                    @method('PATCH')
                    <textarea name="admin_notes" rows="6" placeholder="Add internal notes..." class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">{{ $contact->admin_notes }}</textarea>
                    <button type="submit" class="w-full px-4 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-medium">
                        Save Notes
                    </button>
                </form>
            </div>

            <!-- Timeline Card -->
            @if($contact->replied_at)
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-sm font-semibold text-slate-900 mb-4">Timeline</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex gap-3">
                            <span class="material-icons text-blue-600 text-base">mail_outline</span>
                            <div>
                                <div class="font-medium text-slate-900">Replied to customer</div>
                                <div class="text-xs text-slate-500">{{ $contact->replied_at->format('M d, Y - g:i A') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
