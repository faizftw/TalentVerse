@extends('layouts.app')

@section('title', 'TalentVerse — Platform Keputusan Berbasis Potensi')

@section('content')

{{-- ============================================
     HERO SECTION
     ============================================ --}}
<section id="hero" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    {{-- Background Layers --}}
    <div class="absolute inset-0 bg-gradient-to-br from-tv-dark via-[#0f0a2e] to-tv-darker"></div>

    {{-- Animated Gradient Orbs --}}
    <div class="absolute top-1/4 -left-32 w-96 h-96 bg-tv-violet/20 rounded-full blur-[120px] animate-pulse-glow"></div>
    <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-tv-indigo/15 rounded-full blur-[120px] animate-pulse-glow" style="animation-delay: 1.5s;"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-tv-cyan/5 rounded-full blur-[150px]"></div>

    {{-- Grid Pattern Overlay --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            {{-- Text Content --}}
            <div class="text-center lg:text-left animate-fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-tv-violet/10 border border-tv-violet/20 text-tv-violet-light text-xs font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-tv-violet animate-pulse"></span>
                    Decision-Support System
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-5xl xl:text-6xl font-extrabold text-white leading-[1.1] tracking-tight mb-4">
                    Keputusan yang Baik Bukan yang
                    <span class="bg-gradient-to-r from-red-400 to-orange-400 bg-clip-text text-transparent">Paling Cepat</span><br>
                    Tapi yang <span class="bg-gradient-to-r from-tv-violet via-tv-violet-light to-tv-cyan bg-clip-text text-transparent">Bertanggung Jawab</span>
                </h1>

                <p class="text-base lg:text-lg text-tv-text-muted leading-relaxed max-w-xl mx-auto lg:mx-0 mb-6">
                    <strong class="text-white font-medium">TALENTVERSE®</strong> bekerja di Level Keputusan, bukan sekadar tes atau seleksi. Kami membantu mengeksplorasi potensi dan pola respons Anda melampaui angka.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#cta" class="btn-gradient text-white font-semibold px-6 py-3 rounded-full text-sm inline-flex items-center justify-center gap-2">
                        Ambil Keputusan Sekarang
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="#tentang" class="btn-ghost text-tv-text-muted font-semibold px-6 py-3 rounded-full text-sm inline-flex items-center justify-center gap-2">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>

                {{-- Highlights --}}
                <div class="mt-8 grid grid-cols-2 md:grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
                    <div>
                        <div class="text-lg font-bold text-white">Non-Deterministic</div>
                        <div class="text-[10px] text-tv-text-muted mt-1 leading-tight">Tidak mengunci masa depan</div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-white">Human-Centered</div>
                        <div class="text-[10px] text-tv-text-muted mt-1 leading-tight">Berpusat pada pengembangan</div>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-white">Governance-First</div>
                        <div class="text-[10px] text-tv-text-muted mt-1 leading-tight">Beretika & ada batasannya</div>
                    </div>
                </div>
            </div>

            {{-- Visual --}}
            <div class="relative flex items-center justify-center animate-fade-in-right" style="animation-delay: 0.3s;">
                {{-- Outer Glow Ring --}}
                <div class="absolute w-[280px] h-[280px] lg:w-[360px] lg:h-[360px] rounded-full border border-tv-violet/10 animate-spin-slow"></div>
                <div class="absolute w-[220px] h-[220px] lg:w-[280px] lg:h-[280px] rounded-full border border-tv-indigo/10 animate-spin-slow" style="animation-direction: reverse; animation-duration: 15s;"></div>

                {{-- Central Logo Image --}}
                <div class="relative fingerprint-glow animate-float">
                    <img src="{{ asset('images/tvlogo.png') }}" alt="TalentVerse" class="w-40 h-40 lg:w-56 lg:h-56 object-contain drop-shadow-[0_0_20px_rgba(139,92,246,0.4)]">
                </div>

                {{-- Floating Labels --}}
                <div class="absolute -top-2 right-4 lg:right-0 glass-card px-3 py-2 text-xs text-tv-text-muted animate-float" style="animation-delay: 1s;">
                    <span class="text-tv-cyan">◆</span> Mesin Analisis Biologis (NPA)
                </div>
                <div class="absolute -bottom-2 left-4 lg:left-0 glass-card px-3 py-2 text-xs text-tv-text-muted animate-float" style="animation-delay: 2s;">
                    <span class="text-tv-violet-light">◆</span> Bebas Label Permanen
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Fade --}}
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-tv-dark to-transparent"></div>
</section>


{{-- ============================================
     ABOUT / TENTANG SECTION
     ============================================ --}}
<section id="tentang" class="relative py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: Visual / Text --}}
            <div class="reveal">
                <div class="relative">
                    <div class="glass-card p-8 lg:p-12 border-t-4 border-t-tv-violet">
                        <h4 class="text-lg font-bold text-white mb-4">Posisi TALENTVERSE®</h4>
                        <p class="text-sm text-tv-text-muted leading-relaxed mb-6">
                            Platform ini diposisikan secara tegas sebagai <strong>decision-support system</strong>, yang menghasilkan peta kecenderungan dan preferensi, bukan label permanen atau penentu masa depan manusia.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 w-6 h-6 rounded bg-tv-violet/20 flex items-center justify-center shrink-0 border border-tv-violet/50">
                                    <svg class="w-4 h-4 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-white">Non-deterministic</span>
                                    <span class="block text-xs text-tv-text-muted">Hasil tidak mengunci masa depan seseorang.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 w-6 h-6 rounded bg-tv-indigo/20 flex items-center justify-center shrink-0 border border-tv-indigo/50">
                                    <svg class="w-4 h-4 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-white">Non-reductionist</span>
                                    <span class="block text-xs text-tv-text-muted">Manusia tidak direduksi menjadi sekadar skor atau tipe.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 w-6 h-6 rounded bg-tv-cyan/10 flex items-center justify-center shrink-0 border border-tv-cyan/50">
                                    <svg class="w-4 h-4 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-white">Human-centered</span>
                                    <span class="block text-xs text-tv-text-muted">Data membantu menyesuaikan lingkungan, bukan memaksa individu.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 w-6 h-6 rounded bg-tv-violet/20 flex items-center justify-center shrink-0 border border-tv-violet/50">
                                    <svg class="w-4 h-4 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-sm font-semibold text-white">Governance-first</span>
                                    <span class="block text-xs text-tv-text-muted">Setiap output memiliki batas klaim dan aturan penggunaan yang jelas.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="reveal" style="transition-delay: 0.2s;">
                <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Tentang Platform Kami</h2>
                <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-6">
                    Bukan Sekadar Tes, Ini Adalah
                    <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Pemetaan Kehidupan</span>
                </h3>
                <p class="text-tv-text-muted leading-relaxed mb-6">
                    <strong>TALENTVERSE®</strong> adalah platform pemetaan potensi, kecenderungan, dan pola respons manusia lintas fase kehidupan. Kami hadir untuk membantu individu, keluarga, institusi pendidikan, dan organisasi memahami bagaimana seseorang belajar, berpikir, merespons, dan menghasilkan nilai.
                </p>
                <p class="text-tv-text-muted leading-relaxed mb-8">
                    Ini bukan tes kecerdasan, bukan tes kepribadian, dan bukan alat diagnosis medis atau psikologis. TALENTVERSE® dibangun di atas analytics engine biologis (NPA) yang menjaga pemisahan jelas antara perhitungan data dengan makna dan keputusan manusia.
                </p>

                <div class="flex items-center gap-4 bg-tv-violet/5 rounded-lg p-4 border border-tv-violet/10">
                    <svg class="w-8 h-8 text-tv-cyan shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <div>
                        <div class="text-sm font-semibold text-white">Kepemilikan Penuh</div>
                        <div class="text-xs text-tv-text-muted">Dimiliki dan dikembangkan sepenuhnya oleh PT. LUNARICA BERKAH BATARA.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider max-w-4xl mx-auto"></div>


{{-- ============================================
     STRUKTUR PRODUK SECTION
     ============================================ --}}
<section id="cara-kerja" class="relative py-24 lg:py-32">
    {{-- Background Accent --}}
    <div class="absolute top-0 right-0 w-80 h-80 bg-tv-indigo/10 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20 reveal">
            <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Struktur Produk</h2>
            <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
                Ekosistem Bertingkat Berdasarkan
                <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Fase Kehidupan</span>
            </h3>
            <p class="text-tv-text-muted leading-relaxed">
                Dirancang mengikuti siklus perkembangan manusia, sehingga setiap output relevan secara konteks dan aman secara etika.
            </p>
        </div>

        {{-- Product Levels --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 relative">

            {{-- Level 1 --}}
            <div class="reveal text-center md:text-left" style="transition-delay: 0.1s;">
                <div class="glass-card p-6 lg:p-8 h-full flex flex-col relative overflow-hidden group">
                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-orange-400 to-red-400"></div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-white/5 border border-white/10 rounded text-xs font-semibold text-tv-text-muted mb-2">LEVEL 1</span>
                        <h4 class="text-xl font-bold text-white mb-1">TALENTVERSE ORIGIN</h4>
                        <div class="text-xs font-medium text-tv-violet-light tracking-wide">Target: Bayi – SD <span class="mx-1">•</span> Fokus: Parenting & Foundation</div>
                    </div>
                    <p class="text-sm text-tv-text-muted leading-relaxed mb-6 flex-grow">
                        Mengenali "cetak biru awal" anak untuk membangun pola asuh, komunikasi, dan metode belajar yang tepat sejak dini.
                    </p>
                    <div class="pt-4 border-t border-white/5">
                        <ul class="text-xs text-tv-text-muted text-left space-y-2">
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Learning Modality (VAK)</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Cognitive Domain Preference</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Behavioral Response Profile</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Brain (Left/Right) & Motivation</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Level 2 --}}
            <div class="reveal text-center md:text-left" style="transition-delay: 0.3s;">
                <div class="glass-card p-6 lg:p-8 h-full flex flex-col relative overflow-hidden group scale-100 md:scale-105 z-10 shadow-xl shadow-tv-violet/10">
                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-tv-violet to-tv-indigo"></div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-tv-violet/20 border border-tv-violet/30 rounded text-xs font-semibold text-white mb-2">LEVEL 2</span>
                        <h4 class="text-xl font-bold text-white mb-1">TALENTVERSE VOYAGER</h4>
                        <div class="text-xs font-medium text-tv-violet-light tracking-wide">Target: SMP – SMA <span class="mx-1">•</span> Fokus: Student & Future</div>
                    </div>
                    <p class="text-sm text-tv-text-muted leading-relaxed mb-6 flex-grow">
                        Membantu peserta didik menyusun strategi belajar, ketahanan mental, dan eksplorasi arah masa depan secara sadar & realistis.
                    </p>
                    <div class="pt-4 border-t border-white/5">
                        <ul class="text-xs text-tv-text-muted text-left space-y-2">
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Seluruh fondasi LEVEL 1</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Study Field Alignment</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Cognitive Style & Thinking Mode</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Preference Orientation Map</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Level 3 --}}
            <div class="reveal text-center md:text-left" style="transition-delay: 0.5s;">
                <div class="glass-card p-6 lg:p-8 h-full flex flex-col relative overflow-hidden group">
                    <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-tv-cyan to-blue-500"></div>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-white/5 border border-white/10 rounded text-xs font-semibold text-tv-text-muted mb-2">LEVEL 3</span>
                        <h4 class="text-xl font-bold text-white mb-1">TALENTVERSE PRIME</h4>
                        <div class="text-xs font-medium text-tv-violet-light tracking-wide">Target: Mahasiswa/Pro <span class="mx-1">•</span> Fokus: Career & Wealth</div>
                    </div>
                    <p class="text-sm text-tv-text-muted leading-relaxed mb-6 flex-grow">
                        Berfokus pada karier, kepemimpinan, pengambilan keputusan, dan penciptaan nilai ekonomi dalam konteks profesional.
                    </p>
                    <div class="pt-4 border-t border-white/5">
                        <ul class="text-xs text-tv-text-muted text-left space-y-2">
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Seluruh fondasi LEVEL 1 & 2</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Career & Economic Orientation</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Strategic Decision Mode</li>
                            <li class="flex gap-2"><span class="text-tv-cyan">✓</span> Behavioral Pattern Index (BPP-16)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider max-w-4xl mx-auto"></div>


{{-- ============================================
     BUSINESS MODEL & USAGE SECTION
     ============================================ --}}
<section id="manfaat" class="relative py-24 lg:py-32">
    {{-- Background Accent --}}
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-tv-violet/10 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20 reveal">
            <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Implementasi</h2>
            <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
                Model Bisnis &
                <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Penggunaan Hasil</span>
            </h3>
            <p class="text-tv-text-muted leading-relaxed">
                TALENTVERSE® dirancang untuk mendukung individu secara personal maupun institusi pada skala yang lebih besar.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            {{-- Individu Account --}}
            <div class="glass-card p-8 reveal" style="transition-delay: 0.1s;">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-violet/20 to-tv-violet/5 border border-tv-violet/10 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-1">Individu Account</h4>
                        <div class="text-xs text-tv-text-muted">Untuk Pengguna Personal</div>
                    </div>
                </div>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Digunakan untuk pendaftaran personal oleh individu atau keluarga sebagai end-user. Akun ini memberi akses langsung ke produk TALENTVERSE® sesuai level, tanpa hak distribusi atau modifikasi produk.
                </p>
            </div>

            {{-- Corporate Account --}}
            <div class="glass-card p-8 reveal" style="transition-delay: 0.2s;">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-cyan/20 to-tv-cyan/5 border border-tv-cyan/10 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-1">Corporate Account</h4>
                        <div class="text-xs text-tv-text-muted">Untuk Kemitraan Ekosistem</div>
                    </div>
                </div>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Digunakan untuk pendaftaran kemitraan oleh institusi/organisasi. Akun ini memberikan hak distribusi, dashboard institusional, serta akses program training & lisensi sesuai ketentuan.
                </p>
            </div>
        </div>

        {{-- How to use results --}}
        <div class="glass-card p-8 lg:p-12 reveal" style="transition-delay: 0.3s;">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16 items-center">
                <div>
                    <h4 class="text-lg font-bold text-white mb-4">Bagaimana Hasil Digunakan?</h4>
                    <p class="text-sm text-tv-text-muted mb-6">Hasil TALENTVERSE® digunakan secara bijak sebagai:</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded bg-green-500/10 text-green-400 flex items-center justify-center shrink-0">✓</div>
                            <span class="text-sm text-tv-text-muted">Dasar refleksi diri</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded bg-green-500/10 text-green-400 flex items-center justify-center shrink-0">✓</div>
                            <span class="text-sm text-tv-text-muted">Alat dialog objektif</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded bg-green-500/10 text-green-400 flex items-center justify-center shrink-0">✓</div>
                            <span class="text-sm text-tv-text-muted">Pendukung keputusan masa depan</span>
                        </li>
                    </ul>
                </div>
                <div class="pt-8 md:pt-0 md:border-l md:border-white/10 md:pl-16">
                    <h4 class="text-lg font-bold text-white mb-4">Tidak Digunakan Untuk:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <div class="mt-0.5 w-6 h-6 rounded bg-red-500/10 text-red-400 flex items-center justify-center shrink-0">✕</div>
                            <span class="text-sm text-tv-text-muted">Diagnosis medis atau kondisi psikologis klinis.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-0.5 w-6 h-6 rounded bg-red-500/10 text-red-400 flex items-center justify-center shrink-0">✕</div>
                            <span class="text-sm text-tv-text-muted">Pelabelan permanen pada karakter individu.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-0.5 w-6 h-6 rounded bg-red-500/10 text-red-400 flex items-center justify-center shrink-0">✕</div>
                            <span class="text-sm text-tv-text-muted">Memprediksi takdir atau masa depan secara mutlak.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider max-w-4xl mx-auto"></div>


{{-- ============================================
     CTA SECTION
     ============================================ --}}
<section id="cta" class="relative py-24 lg:py-32 overflow-hidden">
    {{-- Background Gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-tv-violet/10 via-transparent to-tv-indigo/10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-tv-violet/10 rounded-full blur-[150px]"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        {{-- Icon --}}
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-tv-violet to-tv-indigo mb-8 shadow-lg shadow-tv-violet/25">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
            </svg>
        </div>

        <h2 class="text-3xl lg:text-4xl font-extrabold text-white leading-tight mb-6">
            Selaraskan Keputusan Anda<br>
            <span class="bg-gradient-to-r from-tv-violet via-tv-violet-light to-tv-cyan bg-clip-text text-transparent">
                Bersama TALENTVERSE®
            </span>
        </h2>

        <p class="text-lg text-tv-text-muted leading-relaxed max-w-2xl mx-auto mb-10">
            TALENTVERSE® bukan alat penentu siapa Anda, melainkan platform yang membantu keputusan pendidikan, karier, dan pengembangan dieksekusi selaras dengan cara diri Anda bekerja secara alami.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-gradient text-white font-bold px-10 py-4 rounded-full text-lg inline-flex items-center justify-center gap-2">
                Mulai Analisis Sekarang
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="#tentang" class="btn-ghost text-tv-text-muted font-semibold px-10 py-4 rounded-full text-lg inline-flex items-center justify-center gap-2">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection
