@extends('layouts.app')

@section('title', 'TechNews Blog - Software Engineering, AI & Cloud Computing Insights')
@section('description', 'Expert articles on software development, AI/ML, cloud architecture, DevOps, and cybersecurity. Stay informed with weekly deep-dives written by senior engineers.')

@section('content')
    <!-- Blog Hero Section -->
    <section class="px-6 py-16 md:py-20 bg-gradient-to-br from-slate-50 to-indigo-50/30">
        <div class="max-w-7xl mx-auto">
            <div class="text-center space-y-6 max-w-3xl mx-auto">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-4 h-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"
                        />
                    </svg>
                    Our Blog
                </div>

                <h1 class="text-5xl md:text-6xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                    Engineering
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">
                        Excellence
                    </span>
                </h1>

                <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
                    In-depth technical guides, industry analysis, and career advice from engineers at top tech companies. Updated weekly.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Articles Grid -->
    <section class="px-6 py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-slate-900">Latest Articles</h2>

                <!-- Category Filter -->
                <div class="hidden md:flex items-center gap-2">
                    <button
                        class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition-colors"
                    >
                        All
                    </button>
                    @php
                        $categories = \App\Models\Blog::where('status', 'published')->distinct()->pluck('category')->filter()->unique();
                    @endphp
                    @foreach($categories as $cat)
                        <button
                            class="px-4 py-2 bg-white text-slate-600 text-sm font-medium rounded-lg hover:bg-slate-100 transition-colors"
                        >
                            {{ $cat }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    <!-- Article Card -->
                    <a
                        href="{{ route('blog.show', $blog->slug) }}"
                        class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                    >
                        <div class="relative h-48 bg-gradient-to-br from-violet-500 to-purple-600 overflow-hidden">
                            @if($blog->featured_image)
                                <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1"
                                        stroke="currentColor"
                                        class="w-20 h-20 text-white/20"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 16a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"
                                        />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span
                                    class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-violet-600 text-xs font-semibold rounded-full"
                                >
                                    {{ $blog->category }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                                <span>{{ $blog->published_at->format('M d, Y') }}</span>
                                <span>•</span>
                                <span>{{ $blog->read_time }} min read</span>
                            </div>

                            <h3
                                class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                            >
                                {{ $blog->title }}
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                                {{ $blog->excerpt }}
                            </p>

                            <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center text-white text-xs font-bold">
                                        {{ substr($blog->author_name, 0, 1) }}
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium text-slate-700">{{ $blog->author_name }}</span>
                                    </div>
                                </div>

                                <span class="text-indigo-600 font-medium text-sm group-hover:text-indigo-700">Read →</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full py-16 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-slate-300 mx-auto mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <p class="text-slate-500 text-lg font-medium">No published articles yet</p>
                        <p class="text-slate-400 text-sm">Check back soon for new content</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($blogs->hasPages())
                <div class="mt-12">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
