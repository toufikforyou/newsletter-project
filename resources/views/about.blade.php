@extends('layouts.app')

@section('title', 'About TechNews - Our Mission to Inform the Future')
@section('description', 'Meet the team of engineers and editors behind TechNews. We curate critical tech news to help you stay ahead in your career.')

@section('content')
    <!-- Hero Section -->
    <main class="flex-grow px-6 py-16 md:py-24">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <div
                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-600 text-sm font-medium"
            >
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"
                    ></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                About TechNews
            </div>

            <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-slate-900 leading-[1.1]">
                We're on a mission to
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                    inform the future
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                TechNews delivers curated insights to help developers, engineers, and tech leaders stay ahead
                in the rapidly evolving world of technology.
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
                        We believe that staying informed shouldn't be a full-time job. That's why we carefully curate the
                        most critical tech news from across the globe, saving you hours of scrolling.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Our team of experienced editors and engineers handpick articles, research papers, and industry updates that
                        matter most to your professional growth and technical understanding.
                    </p>
                </div>
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl blur-2xl opacity-20"
                    ></div>
                    <div class="relative bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-12 space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center text-white">
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
                                <div class="text-3xl font-bold text-slate-900">50,000+</div>
                                <div class="text-sm text-slate-600">Weekly Readers</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-cyan-600 rounded-xl flex items-center justify-center text-white">
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
                                <div class="text-3xl font-bold text-slate-900">1,200+</div>
                                <div class="text-sm text-slate-600">Articles Published</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-16 h-16 bg-sky-600 rounded-xl flex items-center justify-center text-white"
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
                                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-slate-900">150+</div>
                                <div class="text-sm text-slate-600">Countries Reached</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Meet the Editors</h2>
                <p class="mt-4 text-lg text-slate-600">The experts behind your weekly briefing.</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center">
                    <div class="w-24 h-24 mx-auto bg-slate-200 rounded-full mb-4 overflow-hidden">
                        <img
                            src="toufik.jpg"
                            alt="Founder & CEO"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">MH TOUFIK</h3>
                    <p class="text-blue-600 font-medium mb-2">Founder & CEO</p>
                    <p class="text-slate-600 text-sm">
                        Former Senior Engineer at Falahon technology. Passionate about distributed systems and AI.
                    </p>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center">
                    <div class="w-24 h-24 mx-auto bg-slate-200 rounded-full mb-4 overflow-hidden">
                        <img
                            src="mobarak.jpg"
                            alt="Team Member"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Mobarak Hossain</h3>
                    <p class="text-cyan-600 font-medium mb-2">Senior Tech Writer</p>
                    <p class="text-slate-600 text-sm">
                        Specializes in frontend frameworks and web performance. 2+ years in tech writing.
                    </p>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center">
                    <div class="w-24 h-24 mx-auto bg-slate-200 rounded-full mb-4 overflow-hidden">
                        <img
                            src="shuvo.jpg"
                            alt="Team Member"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Ashraful Islam Shuvo</h3>
                    <p class="text-sky-600 font-medium mb-2">Content Writer</p>
                    <p class="text-slate-600 text-sm">
                        Focused on cloud computing and DevOps trends. Dedicated to clear and concise tech communication.
                    </p>
                </div>
                <!-- Team Member 4 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 text-center">
                    <div class="w-24 h-24 mx-auto bg-slate-200 rounded-full mb-4 overflow-hidden">
                        <img
                            src="jubayer.jpg"
                            alt="Team Member"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Jubayer Ahmed</h3>
                    <p class="text-sky-600 font-medium mb-2">Editor</p>
                    <p class="text-slate-600 text-sm">
                        Experienced in cybersecurity and data privacy. Committed to delivering trustworthy tech news.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
