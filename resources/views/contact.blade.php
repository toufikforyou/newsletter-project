@extends('layouts.app')

@section('title', 'Contact TechNews - Editorial Team & Advertising')
@section('description', 'Get in touch with the TechNews team. Submit news tips, inquire about advertising, or report bugs. We are here to help.')

@section('content')
    <div class="min-h-screen bg-slate-50 py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Get in Touch</h1>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            Have a news tip, feedback on an article, or interested in advertising?
                            We'd love to hear from you.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Editorial Team</h3>
                                <p class="text-slate-600">tips@techappupdate.com</p>
                                <p class="text-sm text-slate-500 mt-1">For news tips and press releases.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-cyan-100 rounded-xl flex items-center justify-center text-cyan-600 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Advertising</h3>
                                <p class="text-slate-600">ads@techappupdate.com</p>
                                <p class="text-sm text-slate-500 mt-1">For sponsorship and partnership inquiries.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center text-sky-600 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Office</h3>
                                <p class="text-slate-600">123 Tech Plaza, Suite 400</p>
                                <p class="text-slate-600">San Francisco, CA 94105</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-slate-700 mb-2">First Name</label>
                                <input
                                    type="text"
                                    id="first-name"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    class="w-full px-4 py-3 rounded-xl border @error('first_name') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                                    placeholder="Jane"
                                    required
                                />
                                @error('first_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-slate-700 mb-2">Last Name</label>
                                <input
                                    type="text"
                                    id="last-name"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    class="w-full px-4 py-3 rounded-xl border @error('last_name') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                                    placeholder="Doe"
                                    required
                                />
                                @error('last_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 rounded-xl border @error('email') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                                placeholder="jane@example.com"
                                required
                            />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                            <select
                                id="subject"
                                name="subject"
                                class="w-full px-4 py-3 rounded-xl border @error('subject') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all bg-white"
                                required
                            >
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select a subject</option>
                                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                <option value="News Tip" {{ old('subject') == 'News Tip' ? 'selected' : '' }}>News Tip</option>
                                <option value="Advertising" {{ old('subject') == 'Advertising' ? 'selected' : '' }}>Advertising</option>
                                <option value="Report a Bug" {{ old('subject') == 'Report a Bug' ? 'selected' : '' }}>Report a Bug</option>
                            </select>
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="4"
                                class="w-full px-4 py-3 rounded-xl border @error('message') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all resize-none"
                                placeholder="How can we help you?"
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-colors shadow-lg shadow-blue-200"
                        >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
