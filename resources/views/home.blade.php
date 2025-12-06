@extends('layouts.app')

@section('title', 'TechNews - The Weekly Brief for Developers & Engineers')
@section('description', 'Join 50,000+ developers receiving the latest insights on software engineering, system architecture, and emerging tech trends.')

@section('content')
    <!-- Hero Section -->
    <div class="bg-slate-900 py-20 md:py-28 overflow-hidden relative">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-900 to-blue-900/20"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-sm font-medium border border-blue-500/20 mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Weekly insights delivered to your inbox
                    </div>

                    <h1 class="text-5xl md:text-6xl font-bold tracking-tight text-white mb-6 leading-[1.1]">
                        Stay ahead of the <br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">tech curve</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-slate-400 mb-10 leading-relaxed max-w-lg">
                        Join 50,000+ developers, engineers, and tech leaders who rely on TechNews for their weekly industry insights.
                    </p>

                    <!-- Subscription Form -->
                    <form class="flex gap-3 max-w-md mb-8">
                        <input
                            type="email"
                            placeholder="Enter your email address"
                            class="flex-1 bg-slate-800/50 border border-slate-700 rounded-lg px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 shadow-sm backdrop-blur-sm"
                            required
                        />
                        <button
                            type="submit"
                            class="bg-blue-600 hover:bg-blue-500 text-white font-medium py-3 px-6 rounded-lg transition-colors shadow-lg shadow-blue-500/20 whitespace-nowrap"
                        >
                            Subscribe Free
                        </button>
                    </form>

                    <!-- Trust Text -->
                    <div class="flex items-center gap-3 text-sm text-slate-400">
                        <div class="flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-blue-500">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                            <span>No spam, ever.</span>
                        </div>
                        <div class="w-1 h-1 rounded-full bg-slate-600"></div>
                        <div>Unsubscribe anytime.</div>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="relative hidden lg:block">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 bg-cyan-500/20 rounded-full blur-3xl"></div>
                    
                    <!-- Illustration Container -->
                    <div class="relative">
                        <!-- Faces Illustration -->
                        <div class="grid grid-cols-2 gap-8">
                            <!-- Person 1 -->
                            <div class="relative top-12">
                                <div class="w-48 h-48 bg-slate-800 border-2 border-blue-500/30 rounded-full overflow-hidden relative shadow-2xl shadow-blue-900/20">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Developer" class="w-full h-full object-cover opacity-90 hover:scale-110 transition-transform duration-700">
                                </div>
                                <!-- Speech Bubble -->
                                <div class="absolute -top-8 -right-8 bg-slate-800 border border-slate-700 rounded-2xl rounded-bl-none p-4 shadow-xl">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                        <span class="text-xs text-slate-400 font-mono">Deploying...</span>
                                    </div>
                                    <div class="w-16 h-1.5 bg-slate-700 rounded-full"></div>
                                </div>
                            </div>

                            <!-- Person 2 -->
                            <div class="relative">
                                <div class="w-40 h-40 bg-slate-800 border-2 border-cyan-500/30 rounded-full overflow-hidden relative ml-auto shadow-2xl shadow-cyan-900/20">
                                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Engineer" class="w-full h-full object-cover opacity-90 hover:scale-110 transition-transform duration-700">
                                </div>
                                <!-- Speech Bubble -->
                                <div class="absolute -top-6 -left-6 bg-slate-800 border border-slate-700 rounded-2xl rounded-br-none p-4 shadow-xl">
                                    <div class="text-xs text-blue-400 font-mono mb-1">&lt;Code /&gt;</div>
                                    <div class="w-12 h-1.5 bg-slate-700 rounded-full"></div>
                                </div>
                            </div>

                            <!-- Person 3 -->
                            <div class="relative col-span-2 flex justify-center -mt-8">
                                <div class="relative">
                                    <div class="w-56 h-56 bg-slate-800 border-2 border-sky-500/30 rounded-full overflow-hidden relative shadow-2xl shadow-sky-900/20">
                                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="CTO" class="w-full h-full object-cover opacity-90 hover:scale-110 transition-transform duration-700">
                                    </div>
                                    <!-- Speech Bubble -->
                                    <div class="absolute -bottom-4 -right-4 bg-slate-800 border border-slate-700 rounded-2xl rounded-tl-none p-4 shadow-xl">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                            <span class="text-xs text-slate-300 font-bold">New Insight</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Feature 1 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Real-Time Tech News</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Don't miss a beat. We aggregate breaking news from Silicon Valley to open source communities worldwide.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-cyan-100 rounded-xl flex items-center justify-center text-cyan-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Emerging Technologies</h3>
                    <p class="text-slate-600 leading-relaxed">
                        From AI and Machine Learning to Web3 and Quantum Computing, we cover the innovations shaping the future.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-sky-100 rounded-xl flex items-center justify-center text-sky-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Developer Community</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Connect with fellow engineers. Discuss the latest frameworks, debug code, and share your projects.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Trusted by Tech Leaders</h2>
                <p class="mt-4 text-lg text-slate-600">See why CTOs and Senior Engineers read our weekly updates.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">DK</div>
                        <div>
                            <div class="font-semibold text-slate-900">David Kim</div>
                            <div class="text-sm text-slate-500">CTO at TechFlow</div>
                        </div>
                    </div>
                    <p class="text-slate-600">"The only source I need to stay on top of the rapidly changing tech landscape. Essential reading."</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-10 w-10 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 font-bold">SJ</div>
                        <div>
                            <div class="font-semibold text-slate-900">Sarah Jenkins</div>
                            <div class="text-sm text-slate-500">Lead Architect</div>
                        </div>
                    </div>
                    <p class="text-slate-600">"I love the deep dives into new technologies. It helps me make better architectural decisions."</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-10 w-10 rounded-full bg-sky-100 flex items-center justify-center text-sky-600 font-bold">MP</div>
                        <div>
                            <div class="font-semibold text-slate-900">Marcus Patel</div>
                            <div class="text-sm text-slate-500">DevOps Engineer</div>
                        </div>
                    </div>
                    <p class="text-slate-600">"Finally, a tech news site that cuts through the noise and delivers actual value. Highly recommended."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our News Curation Process</h2>
                <p class="mt-4 text-lg text-slate-600">Delivering accuracy and relevance in every update.</p>
            </div>
            <div class="relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-slate-100 -translate-y-1/2 z-0"></div>
                
                <div class="grid md:grid-cols-3 gap-12 relative z-10">
                    <!-- Step 1 -->
                    <div class="bg-white p-6 text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mb-6 shadow-lg shadow-blue-200">1</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Global Monitoring</h3>
                        <p class="text-slate-600">We track hundreds of tech news outlets, GitHub repositories, and developer forums 24/7.</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="bg-white p-6 text-center">
                        <div class="w-16 h-16 mx-auto bg-cyan-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mb-6 shadow-lg shadow-cyan-200">2</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Expert Analysis</h3>
                        <p class="text-slate-600">Our senior editors verify facts and provide context to help you understand the impact.</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="bg-white p-6 text-center">
                        <div class="w-16 h-16 mx-auto bg-sky-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mb-6 shadow-lg shadow-sky-200">3</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Weekly Briefing</h3>
                        <p class="text-slate-600">We compile the most critical updates into a concise, easy-to-read format for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Blog Section -->
    <section class="py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Latest Tech Insights</h2>
                    <p class="mt-4 text-lg text-slate-600">Deep dives, tutorials, and industry news.</p>
                </div>
                <a href="{{ route('blog.index') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center gap-2">
                    Read all articles
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestBlogs as $blog)
                    <a href="{{ route('blog.show', $blog->slug) }}" class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-slate-100 flex flex-col h-full">
                        <div class="h-48 bg-slate-200 relative overflow-hidden">
                            @if($blog->featured_image)
                                <img src="{{ $blog->featured_image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-16 h-16 text-white/30">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-blue-600 uppercase tracking-wider">
                                {{ $blog->category ?? 'General' }}
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                                <span>{{ $blog->published_at?->format('M d, Y') }}</span>
                                <span>•</span>
                                <span>{{ $blog->read_time ?? '—' }} min read</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                                {{ $blog->title }}
                            </h3>
                            <p class="text-slate-600 mb-4 line-clamp-3 flex-1">
                                {{ \Illuminate\Support\Str::limit($blog->excerpt ?? '', 150) }}
                            </p>
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">
                                    {{ substr($blog->author_name ?? 'A', 0, 1) }}
                                </div>
                                <span class="text-sm font-medium text-slate-900">{{ $blog->author_name ?? 'Admin' }}</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full py-12 text-center">
                        <p class="text-slate-500 font-medium">No published articles yet.</p>
                        <a href="{{ route('blog.index') }}" class="text-blue-600 hover:text-blue-700 text-sm font-semibold mt-2 inline-flex items-center gap-1">View blog
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Stay Informed. Stay Ahead.</h2>
            <p class="text-blue-200 text-lg mb-10 max-w-2xl mx-auto">Join the fastest-growing community of tech professionals and get your weekly news briefing.</p>
            <form class="max-w-md mx-auto relative flex items-center bg-white/10 rounded-xl p-2 ring-1 ring-white/20 backdrop-blur-sm">
                <input
                    type="email"
                    placeholder="Enter your email address"
                    class="w-full bg-transparent border-0 focus:outline-none rounded-lg px-4 text-white placeholder:text-slate-400 h-12"
                    required
                />
                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 whitespace-nowrap"
                >
                    Subscribe Now
                </button>
            </form>
        </div>
    </section>
@endsection
