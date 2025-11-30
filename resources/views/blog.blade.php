@extends('layouts.app')

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
                    Insights &
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">
                        Stories
                    </span>
                </h1>

                <p class="text-lg md:text-xl text-slate-600 leading-relaxed">
                    Discover the latest trends, tutorials, and insights from our team of experts in web development,
                    design, and technology.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="px-6 py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-2 mb-8">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-5 h-5 text-indigo-600"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd"
                    />
                </svg>
                <h2 class="text-2xl font-bold text-slate-900">Featured Article</h2>
            </div>

            <div
                class="group relative bg-gradient-to-br from-slate-50 to-white rounded-2xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-xl"
            >
                <div class="grid md:grid-cols-2 gap-0">
                    <!-- Image -->
                    <div
                        class="relative h-64 md:h-auto bg-gradient-to-br from-indigo-500 to-violet-600 overflow-hidden"
                    >
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1"
                                stroke="currentColor"
                                class="w-32 h-32 text-white/20"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-3 py-1 bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-semibold rounded-full"
                            >
                                Featured
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 md:p-10 flex flex-col justify-center">
                        <div class="flex items-center gap-4 text-sm text-slate-500 mb-4">
                            <span class="flex items-center gap-1.5">
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
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"
                                    />
                                </svg>
                                Nov 28, 2025
                            </span>
                            <span>•</span>
                            <span>8 min read</span>
                        </div>

                        <h3
                            class="text-3xl font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors"
                        >
                            Building Modern Web Applications with Laravel and Tailwind CSS
                        </h3>

                        <p class="text-slate-600 leading-relaxed mb-6">
                            Discover how to leverage the power of Laravel's elegant syntax combined with Tailwind CSS's
                            utility-first approach to create stunning, performant web applications in record time.
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-violet-600"
                                ></div>
                                <div>
                                    <p class="font-semibold text-slate-900 text-sm">Sarah Johnson</p>
                                    <p class="text-xs text-slate-500">Senior Developer</p>
                                </div>
                            </div>

                            <a
                                href="#"
                                class="inline-flex items-center gap-2 text-indigo-600 font-semibold hover:text-indigo-700 group/link"
                            >
                                Read More
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    class="w-4 h-4 group-hover/link:translate-x-1 transition-transform"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
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
                    <button
                        class="px-4 py-2 bg-white text-slate-600 text-sm font-medium rounded-lg hover:bg-slate-100 transition-colors"
                    >
                        Development
                    </button>
                    <button
                        class="px-4 py-2 bg-white text-slate-600 text-sm font-medium rounded-lg hover:bg-slate-100 transition-colors"
                    >
                        Design
                    </button>
                    <button
                        class="px-4 py-2 bg-white text-slate-600 text-sm font-medium rounded-lg hover:bg-slate-100 transition-colors"
                    >
                        Tech News
                    </button>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article Card 1 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-violet-500 to-purple-600 overflow-hidden">
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
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-violet-600 text-xs font-semibold rounded-full"
                            >
                                Design
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 27, 2025</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            The Future of UI/UX Design: Trends to Watch in 2026
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Explore the emerging design trends that will shape the digital landscape in the coming year,
                            from AI-powered interfaces to immersive experiences.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-violet-500 to-purple-600"></div>
                                <span class="text-sm font-medium text-slate-700">Alex Chen</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>

                <!-- Article Card 2 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-emerald-500 to-teal-600 overflow-hidden">
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
                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-emerald-600 text-xs font-semibold rounded-full"
                            >
                                Development
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 25, 2025</span>
                            <span>•</span>
                            <span>10 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            Optimizing Laravel Performance: Advanced Techniques
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Learn how to supercharge your Laravel applications with caching strategies, database
                            optimization, and query performance improvements.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-emerald-500 to-teal-600"></div>
                                <span class="text-sm font-medium text-slate-700">Mike Rodriguez</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>

                <!-- Article Card 3 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-orange-500 to-red-600 overflow-hidden">
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
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-orange-600 text-xs font-semibold rounded-full"
                            >
                                Tech News
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 24, 2025</span>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            What's New in JavaScript ES2026: A Complete Overview
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Dive into the latest JavaScript features and improvements that are changing the way we write
                            modern web applications.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-orange-500 to-red-600"></div>
                                <span class="text-sm font-medium text-slate-700">Emma Davis</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>

                <!-- Article Card 4 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-blue-500 to-cyan-600 overflow-hidden">
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
                                    d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-blue-600 text-xs font-semibold rounded-full"
                            >
                                Development
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 22, 2025</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            Building RESTful APIs with Laravel: Best Practices
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Master the art of creating scalable, maintainable APIs using Laravel's powerful features and
                            industry-standard patterns.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-cyan-600"></div>
                                <span class="text-sm font-medium text-slate-700">James Wilson</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>

                <!-- Article Card 5 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-pink-500 to-rose-600 overflow-hidden">
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
                                    d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-pink-600 text-xs font-semibold rounded-full"
                            >
                                Design
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 20, 2025</span>
                            <span>•</span>
                            <span>9 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            Creating Accessible Web Experiences: A Designer's Guide
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Learn how to design inclusive digital experiences that work for everyone, regardless of
                            their abilities or circumstances.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-500 to-rose-600"></div>
                                <span class="text-sm font-medium text-slate-700">Lisa Anderson</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>

                <!-- Article Card 6 -->
                <article
                    class="group bg-white rounded-xl overflow-hidden border border-slate-200 hover:border-indigo-200 transition-all duration-300 hover:shadow-lg flex flex-col"
                >
                    <div class="relative h-48 bg-gradient-to-br from-amber-500 to-yellow-600 overflow-hidden">
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
                                    d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"
                                />
                            </svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="px-2.5 py-1 bg-white/90 backdrop-blur-sm text-amber-600 text-xs font-semibold rounded-full"
                            >
                                Tech News
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                            <span>Nov 18, 2025</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>

                        <h3
                            class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors line-clamp-2"
                        >
                            AI in Web Development: Tools That Boost Productivity
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed mb-4 flex-grow line-clamp-3">
                            Discover the AI-powered tools and assistants that are revolutionizing how developers build
                            and maintain web applications.
                        </p>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-amber-500 to-yellow-600"></div>
                                <span class="text-sm font-medium text-slate-700">David Kim</span>
                            </div>

                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Read →</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button
                    class="inline-flex items-center gap-2 px-8 py-3 bg-white text-slate-700 font-semibold rounded-lg border-2 border-slate-200 hover:border-indigo-600 hover:text-indigo-600 transition-all duration-200 shadow-sm hover:shadow-md"
                >
                    Load More Articles
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="w-4 h-4"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="px-6 py-16 bg-gradient-to-br from-indigo-600 to-violet-600">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Never Miss an Article</h2>
            <p class="text-lg text-indigo-100">
                Subscribe to our newsletter and get the latest articles delivered straight to your inbox every week.
            </p>

            <div class="max-w-md mx-auto pt-4">
                <form class="relative flex items-center bg-white rounded-xl p-2 shadow-xl">
                    <div class="px-2 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
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
