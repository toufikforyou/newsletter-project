@extends('admin.layout')

@section('title', 'Add Subscriber')
@section('page_title', 'Add New Subscriber')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
        <form method="POST" action="{{ route('admin.subscribers.store') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-slate-900 mb-2">Email Address *</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="name" class="block text-sm font-medium text-slate-900 mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" value="{{ old('name') }}" placeholder="Full name (optional)">
                @error('name')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-slate-900 mb-2">Status *</label>
                <select id="status" name="status" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white @error('status') border-red-500 @enderror">
                    <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="unsubscribed" {{ old('status') === 'unsubscribed' ? 'selected' : '' }}>Unsubscribed</option>
                    <option value="bounced" {{ old('status') === 'bounced' ? 'selected' : '' }}>Bounced</option>
                </select>
                @error('status')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                    Add Subscriber
                </button>
                <a href="{{ route('admin.subscribers.index') }}" class="px-6 py-2 bg-slate-200 text-slate-900 rounded-lg hover:bg-slate-300 transition-colors font-medium">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
