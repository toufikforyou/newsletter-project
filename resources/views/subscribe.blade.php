@extends('layouts.app')

@section('title', 'Subscribe to TechNews - Weekly Tech Insights')
@section('description', 'Get the latest tech news, coding tips, and career advice delivered to your inbox.')

@section('content')
<div class="min-h-screen bg-slate-900 flex items-center justify-center py-20 px-6 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl mix-blend-screen"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl mix-blend-screen"></div>
    </div>

    <div class="max-w-4xl w-full bg-slate-800/50 backdrop-blur-xl border border-slate-700 rounded-2xl shadow-2xl overflow-hidden relative z-10">
        <div class="grid md:grid-cols-2">
            <!-- Left: Content -->
            <div class="p-8 md:p-12 flex flex-col justify-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-medium border border-blue-500/20 w-fit mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    Weekly Tech Briefing
                </div>

                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4 tracking-tight">
                    Upgrade your <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">tech knowledge</span>
                </h1>
                
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Join 50,000+ developers receiving hand-picked news, tutorials, and career advice. No fluff, just value.
                </p>

                <form class="space-y-4">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input 
                            type="email" 
                            id="email" 
                            placeholder="name@company.com" 
                            class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white placeholder:text-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all"
                            required
                        >
                    </div>
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-6 rounded-lg transition-all shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40"
                    >
                        Subscribe for Free
                    </button>
                </form>

                <div class="mt-6 flex items-center gap-4 text-xs text-slate-500">
                    <div class="flex -space-x-2">
                        <img class="w-6 h-6 rounded-full border-2 border-slate-800" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=64&h=64" alt="User">
                        <img class="w-6 h-6 rounded-full border-2 border-slate-800" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=64&h=64" alt="User">
                        <img class="w-6 h-6 rounded-full border-2 border-slate-800" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=64&h=64" alt="User">
                    </div>
                    <p>Join 50k+ others</p>
                </div>
            </div>

            <!-- Right: Testimonials/Visuals -->
            <div class="bg-slate-900/50 p-8 md:p-12 flex flex-col justify-center border-l border-slate-700/50">
                <div class="space-y-6">
                    <!-- Testimonial 1 -->
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <div class="flex items-center gap-1 text-yellow-500 mb-2">
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                        </div>
                        <p class="text-slate-300 text-sm mb-3">"The only newsletter I actually read every morning. It's concise and always relevant."</p>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center text-xs text-white font-bold">S</div>
                            <span class="text-xs text-slate-400 font-medium">Sarah Jenkins, Senior Dev</span>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50 opacity-75 scale-95">
                        <div class="flex items-center gap-1 text-yellow-500 mb-2">
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                            <span class="material-icons text-sm">star</span>
                        </div>
                        <p class="text-slate-300 text-sm mb-3">"Keeps me updated on React and AI trends without the noise."</p>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-cyan-500 flex items-center justify-center text-xs text-white font-bold">M</div>
                            <span class="text-xs text-slate-400 font-medium">Mike Chen, CTO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
