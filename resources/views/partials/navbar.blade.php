{{-- Navbar --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-tv-violet to-tv-indigo flex items-center justify-center transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-white tracking-tight">
                    Talent<span class="text-tv-violet-light">Verse</span>
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#tentang" class="text-sm text-tv-text-muted hover:text-white transition-colors duration-300">Tentang</a>
                <a href="#cara-kerja" class="text-sm text-tv-text-muted hover:text-white transition-colors duration-300">Cara Kerja</a>
                <a href="#manfaat" class="text-sm text-tv-text-muted hover:text-white transition-colors duration-300">Manfaat</a>
                <a href="#cta" class="btn-gradient text-sm font-semibold text-white px-5 py-2.5 rounded-full">
                    Coba Sekarang
                </a>
            </div>

            {{-- Mobile Menu Toggle --}}
            <button id="mobile-menu-btn" class="md:hidden text-white p-2 rounded-lg hover:bg-white/5 transition-colors" aria-label="Toggle menu">
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="md:hidden hidden pb-6">
            <div class="flex flex-col gap-4 pt-4 border-t border-white/10">
                <a href="#tentang" class="text-tv-text-muted hover:text-white transition-colors px-2 py-1">Tentang</a>
                <a href="#cara-kerja" class="text-tv-text-muted hover:text-white transition-colors px-2 py-1">Cara Kerja</a>
                <a href="#manfaat" class="text-tv-text-muted hover:text-white transition-colors px-2 py-1">Manfaat</a>
                <a href="#cta" class="btn-gradient text-center text-sm font-semibold text-white px-5 py-2.5 rounded-full mt-2">
                    Coba Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-tv-darker/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-tv-violet/5');
        } else {
            navbar.classList.remove('bg-tv-darker/80', 'backdrop-blur-xl', 'shadow-lg', 'shadow-tv-violet/5');
        }
    });

    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');
    mobileBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        });
    });
</script>
@endpush
