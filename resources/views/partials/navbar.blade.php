{{-- Navbar --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-12 h-12 flex items-center justify-center transition-transform duration-300 group-hover:scale-110">
                    <img src="{{ asset('images/tvlogo.png') }}" alt="TalentVerse Logo" class="w-full h-full object-contain">
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
