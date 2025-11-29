@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <main class="flex-grow flex items-center justify-center px-6 py-16 md:py-24">
        <div class="max-w-4xl mx-auto text-center space-y-10">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium"
            >
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"
                    ></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                Weekly insights delivered to your inbox
            </div>

            <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                Stay ahead of the curve with our
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">
                    daily newsletter
                </span>
                .
            </h1>

            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Join 10,000+ developers and designers who get our curated content on web development, design trends, and
                tech news. No spam, unsubscribe anytime.
            </p>

            <!-- Subscription Form -->
            <div class="max-w-md mx-auto pt-4">
                <form class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-violet-500 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"
                    ></div>
                    <div class="relative flex items-center bg-white rounded-xl p-2 shadow-xl ring-1 ring-slate-900/5">
                        <div class="px-2 text-slate-400">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"
                                />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"
                                />
                            </svg>
                        </div>
                        <input
                            type="email"
                            placeholder="Enter your email address"
                            class="w-full bg-transparent border-0 focus:outline-none rounded-lg px-2 text-slate-900 placeholder:text-slate-400 h-12"
                            required
                        />
                        <button
                            type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 whitespace-nowrap"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>
                <p class="mt-4 text-xs text-slate-500">
                    We care about your data in our
                    <a href="#" class="underline hover:text-indigo-600">privacy policy</a>
                    .
                </p>
            </div>
        </div>
    </main>

    <!-- Features Section -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Save Time</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We spend hours curating the best content so you don't have to. Get the highlights in 5 minutes
                        or less.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center text-violet-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Stay Relevant</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Keep up with the fast-paced world of tech. We cover the latest tools, libraries, and frameworks.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-fuchsia-100 rounded-xl flex items-center justify-center text-fuchsia-600">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Community Driven</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Join a community of like-minded individuals. Share your thoughts and get featured in our next
                        issue.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
