<nav class="z-[100] w-full py-6 px-6 md:px-12 flex justify-between items-center max-w-7xl mx-auto relative">
    <div class="text-2xl font-bold tracking-tighter text-indigo-600 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
            <path
                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"
            />
        </svg>
        <span>Newsletter</span>
    </div>

    <button id="toggle" class="md:hidden text-slate-600 hover:text-indigo-600">
        <span id="icon" class="material-icons text-3xl">menu</span>
    </button>

    <div
        id="menu"
        class="hidden w-full md:w-auto md:flex md:items-center md:gap-10 absolute md:static left-0 top-[72px] z-[10] bg-white md:bg-transparent md:border-none shadow-md md:shadow-none px-6 py-4 md:p-0 space-y-4 md:space-y-0"
    >
        <div class="flex flex-col md:flex-row md:items-center md:gap-10 space-y-4 md:space-y-0">
            <a href="{{ url('/') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">Home</a>
            <a href="{{ url('/about') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">About</a>
            <a href="{{ url('/blog') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">Blog</a>
            <a href="{{ url('/contact') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600">
                Contact
            </a>
        </div>

        <a
            href="#"
            class="block bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold py-2.5 px-6 rounded-lg shadow-sm hover:shadow-md text-center md:ml-6"
        >
            Subscribe
        </a>
    </div>
</nav>

<script>
    const toggle = document.getElementById('toggle');
    const menu = document.getElementById('menu');
    const icon = document.getElementById('icon');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        icon.textContent = menu.classList.contains('hidden') ? 'menu' : 'close';
    });
</script>
