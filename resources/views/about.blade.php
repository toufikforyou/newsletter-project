@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <main class="flex-grow px-6 py-16 md:py-24">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium"
            >
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"
                    ></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                Our Story
            </div>

            <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                We're on a mission to
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">
                    empower creators
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                Our newsletter delivers curated insights to help developers, designers, and tech enthusiasts stay ahead
                in the ever-evolving digital landscape.
            </p>
        </div>
    </main>

    <!-- Mission Section -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <h2 class="text-4xl font-bold text-slate-900">Our Mission</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        We believe that staying informed shouldn't be overwhelming. That's why we carefully curate the
                        most valuable content from across the web, saving you hours of research time.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Our team of experienced developers and designers handpick articles, tutorials, and news that
                        matter most to your professional growth.
                    </p>
                </div>
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-violet-500 rounded-2xl blur-2xl opacity-20"
                    ></div>
                    <div class="relative bg-gradient-to-br from-indigo-50 to-violet-50 rounded-2xl p-12 space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-indigo-600 rounded-xl flex items-center justify-center text-white">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-slate-900">10,000+</div>
                                <div class="text-sm text-slate-600">Active Subscribers</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-violet-600 rounded-xl flex items-center justify-center text-white">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-slate-900">500+</div>
                                <div class="text-sm text-slate-600">Issues Published</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-16 h-16 bg-fuchsia-600 rounded-xl flex items-center justify-center text-white"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-8 h-8"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-slate-900">4.9/5</div>
                                <div class="text-sm text-slate-600">Average Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Our Core Values</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    These principles guide everything we do, from content curation to community engagement.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center text-indigo-600 mb-6"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Quality First</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We never compromise on quality. Every piece of content is carefully vetted to ensure it provides
                        real value to our readers.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-14 h-14 bg-violet-100 rounded-xl flex items-center justify-center text-violet-600 mb-6"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Community Focused</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Our community is at the heart of everything we do. We listen, engage, and grow together with our
                        subscribers.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-14 h-14 bg-fuchsia-100 rounded-xl flex items-center justify-center text-fuchsia-600 mb-6"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Innovation Driven</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We stay on the cutting edge of technology and trends, bringing you the latest insights before
                        they become mainstream.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Meet Our Team</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    A passionate group of developers, designers, and content creators dedicated to your success.
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center group">
                    <div class="relative mb-6 mx-auto w-40 h-40">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-violet-500 rounded-full blur opacity-25 group-hover:opacity-75 transition duration-300"
                        ></div>
                        <div
                            class="relative w-40 h-40 bg-gradient-to-br from-indigo-400 to-violet-400 rounded-full flex items-center justify-center text-white text-4xl font-bold"
                        >
                            MH
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">MH TOUFIK</h3>
                    <p class="text-sm text-indigo-600 font-medium mb-2">Founder & CEO</p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center group">
                    <div class="relative mb-6 mx-auto w-40 h-40">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-violet-500 to-fuchsia-500 rounded-full blur opacity-25 group-hover:opacity-75 transition duration-300"
                        ></div>
                        <div
                            class="relative w-40 h-40 bg-gradient-to-br from-violet-400 to-fuchsia-400 rounded-full flex items-center justify-center text-white text-4xl font-bold"
                        >
                            MH
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Mobarak Hossen</h3>
                    <p class="text-sm text-violet-600 font-medium mb-2">Designer & CTO</p>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center group">
                    <div class="relative mb-6 mx-auto w-40 h-40">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-fuchsia-500 to-pink-500 rounded-full blur opacity-25 group-hover:opacity-75 transition duration-300"
                        ></div>
                        <div
                            class="relative w-40 h-40 bg-gradient-to-br from-fuchsia-400 to-pink-400 rounded-full flex items-center justify-center text-white text-4xl font-bold"
                        >
                            JH
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Jubayer Hossen</h3>
                    <p class="text-sm text-fuchsia-600 font-medium mb-2">Lead Developer & COO</p>
                </div>

                <!-- Team Member 4 -->
                <div class="text-center group">
                    <div class="relative mb-6 mx-auto w-40 h-40">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full blur opacity-25 group-hover:opacity-75 transition duration-300"
                        ></div>
                        <div
                            class="relative w-40 h-40 bg-gradient-to-br from-pink-400 to-rose-400 rounded-full flex items-center justify-center text-white text-4xl font-bold"
                        >
                            SA
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Shuvo Ahmed</h3>
                    <p class="text-sm text-pink-600 font-medium mb-2">Marketing Head</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-600 to-violet-600">
        <div class="max-w-4xl mx-auto px-6 text-center space-y-8">
            <h2 class="text-4xl md:text-5xl font-bold text-white">Join Our Growing Community</h2>
            <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
                Be part of a community that values quality content, continuous learning, and professional growth.
            </p>
            <div class="max-w-md mx-auto">
                <form class="relative group">
                    <div class="relative flex items-center bg-white rounded-xl p-2 shadow-2xl">
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
                            class="bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg whitespace-nowrap"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
