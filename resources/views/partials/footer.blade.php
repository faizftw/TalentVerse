{{-- Footer --}}
<footer class="relative bg-tv-darker border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-16">
            {{-- Brand --}}
            <div>
                <a href="#" class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-tv-violet to-tv-indigo flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <span class="text-lg font-bold text-white tracking-tight">
                        Talent<span class="text-tv-violet-light">Verse</span>
                    </span>
                </a>
                <p class="text-sm text-tv-text-muted leading-relaxed max-w-xs">
                    Platform inovatif untuk eksplorasi potensi diri melalui analisis kepribadian berbasis sidik jari.
                </p>
            </div>

            {{-- Links --}}
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Navigasi</h4>
                <ul class="space-y-3">
                    <li><a href="#tentang" class="text-sm text-tv-text-muted hover:text-tv-violet-light transition-colors">Tentang Kami</a></li>
                    <li><a href="#cara-kerja" class="text-sm text-tv-text-muted hover:text-tv-violet-light transition-colors">Cara Kerja</a></li>
                    <li><a href="#manfaat" class="text-sm text-tv-text-muted hover:text-tv-violet-light transition-colors">Manfaat</a></li>
                    <li><a href="#cta" class="text-sm text-tv-text-muted hover:text-tv-violet-light transition-colors">Mulai Sekarang</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Hubungi Kami</h4>
                <ul class="space-y-3">
                    <li class="flex items-center gap-2 text-sm text-tv-text-muted">
                        <svg class="w-4 h-4 text-tv-violet-light shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        info@talentverse.id
                    </li>
                    <li class="flex items-center gap-2 text-sm text-tv-text-muted">
                        <svg class="w-4 h-4 text-tv-violet-light shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Jakarta, Indonesia
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-tv-text-muted">&copy; {{ date('Y') }} TalentVerse. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="text-xs text-tv-text-muted hover:text-tv-violet-light transition-colors">Kebijakan Privasi</a>
                <span class="text-white/10">|</span>
                <a href="#" class="text-xs text-tv-text-muted hover:text-tv-violet-light transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
