@extends('layouts.app')

@section('title', $blog->title . ' | TechNews Blog')
@section('description', Str::limit($blog->excerpt, 160))

@section('content')
    <!-- Blog Header -->
    <section class="px-6 py-16 bg-gradient-to-br from-slate-50 to-indigo-50/30 border-b border-slate-200">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-2 mb-4">
                <a href="{{ route('blog.index') }}" class="text-indigo-600 hover:text-indigo-700 text-sm font-medium flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    Back to Blog
                </a>
            </div>

            <div class="space-y-4">
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium">
                    {{ $blog->category }}
                </div>

                <h1 class="text-6xl md:text-5xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                    {{ $blog->title }}
                </h1>

                <p class="text-xl text-slate-600 leading-relaxed max-w-2xl">
                    {{ $blog->excerpt }}
                </p>

                <div class="flex flex-wrap items-center gap-6 pt-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-violet-600 flex items-center justify-center text-white font-bold text-lg">
                            {{ substr($blog->author_name, 0, 1) }}
                        </div>
                        <div>
                            <p class="font-semibold text-slate-900">{{ $blog->author_name }}</p>
                            <p class="text-sm text-slate-500">{{ $blog->author_role }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 text-sm text-slate-600">
                        <span class="flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            {{ $blog->published_at->format('M d, Y') }}
                        </span>
                        <span>•</span>
                        <span class="flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5-13C6.228 2 2 6.228 2 12s4.228 10 10 10 10-4.228 10-10S17.772 2 12 2z" />
                            </svg>
                            {{ $blog->read_time }} min read
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    @if($blog->featured_image)
        <section class="px-6 py-8 bg-white">
            <div class="max-w-4xl mx-auto">
                <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-auto rounded-2xl shadow-lg object-cover max-h-96">
            </div>
        </section>
    @endif

    <!-- Blog Content -->
    <section class="px-6 py-16 bg-white">
        <div class="max-w-3xl mx-auto">
            <article class="prose prose-lg prose-indigo max-w-none">
                {!! nl2br(e($blog->content)) !!}
            </article>

            <!-- Blog Meta -->
            <div class="mt-12 pt-8 border-t border-slate-200 space-y-4">
                <div>
                    <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wide mb-3">Category</h3>
                    <span class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium">
                        {{ $blog->category }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    @if($relatedBlogs->count() > 0)
        <section class="px-6 py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-slate-900 mb-10">Related Articles</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($relatedBlogs as $related)
                        <article class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col">
                            <div class="relative h-48 bg-gradient-to-br from-violet-500 to-purple-600 overflow-hidden">
                                @if($related->featured_image)
                                    <img src="{{ $related->featured_image }}" alt="{{ $related->title }}" class="w-full h-full object-cover">
                                @else
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20 text-white/20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 16a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute top-4 left-4">
                                    <span class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-violet-600 text-xs font-semibold rounded-full">
                                        {{ $related->category }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                                    <span>{{ $related->published_at->format('M d, Y') }}</span>
                                    <span>•</span>
                                    <span>{{ $related->read_time }} min read</span>
                                </div>

                                <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors line-clamp-2">
                                    {{ $related->title }}
                                </h3>

                                <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-2">
                                    {{ $related->excerpt }}
                                </p>

                                <div class="pt-4 border-t border-slate-100">
                                    <a href="{{ route('blog.show', $related->slug) }}" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-medium text-sm">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="px-6 py-16 bg-gradient-to-br from-indigo-600 to-violet-600">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Get More Insights Like This</h2>
            <p class="text-lg text-indigo-100">
                Subscribe to our weekly newsletter for curated tech insights, industry analysis, and career growth tips.
            </p>

            <div class="max-w-md mx-auto pt-4">
                <form class="relative flex items-center bg-white rounded-xl p-2 shadow-xl">
                    <div class="px-2 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                    </div>
                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="w-full bg-transparent border-0 focus:outline-none rounded-lg px-2 text-slate-900 placeholder:text-slate-400 h-12"
                        required
                    />
                    <button
                        type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg whitespace-nowrap"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
