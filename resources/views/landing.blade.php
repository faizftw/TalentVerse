@extends('layouts.app')

@section('title', 'Talent Verse — Eksplorasi Potensi Diri Melalui Sidik Jari')

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

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Text Content --}}
            <div class="text-center lg:text-left animate-fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-tv-violet/10 border border-tv-violet/20 text-tv-violet-light text-xs font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-tv-violet animate-pulse"></span>
                    Platform Analisis Biometrik #1 di Indonesia
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white leading-[1.1] tracking-tight mb-6">
                    Eksplorasi
                    <span class="bg-gradient-to-r from-tv-violet via-tv-violet-light to-tv-cyan bg-clip-text text-transparent">
                        Potensi Diri
                    </span>
                    <br>Melalui Sidik Jari
                </h1>

                <p class="text-lg lg:text-xl text-tv-text-muted leading-relaxed max-w-xl mx-auto lg:mx-0 mb-8">
                    Temukan kepribadian unik Anda dengan teknologi analisis sidik jari terkini. Talent Verse membantu Anda memahami diri sendiri secara mendalam dan ilmiah.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#cta" class="btn-gradient text-white font-semibold px-8 py-4 rounded-full text-base inline-flex items-center justify-center gap-2">
                        Coba Sekarang
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="#tentang" class="btn-ghost text-tv-text-muted font-semibold px-8 py-4 rounded-full text-base inline-flex items-center justify-center gap-2">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>

                {{-- Trust Stats --}}
                <div class="mt-12 grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0">
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold text-white">50K<span class="text-tv-violet-light">+</span></div>
                        <div class="text-xs text-tv-text-muted mt-1">Pengguna Aktif</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold text-white">98<span class="text-tv-violet-light">%</span></div>
                        <div class="text-xs text-tv-text-muted mt-1">Tingkat Akurasi</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold text-white">4.9<span class="text-tv-violet-light">★</span></div>
                        <div class="text-xs text-tv-text-muted mt-1">Rating Pengguna</div>
                    </div>
                </div>
            </div>

            {{-- Fingerprint Visual --}}
            <div class="relative flex items-center justify-center animate-fade-in-right" style="animation-delay: 0.3s;">
                {{-- Outer Glow Ring --}}
                <div class="absolute w-80 h-80 lg:w-[420px] lg:h-[420px] rounded-full border border-tv-violet/10 animate-spin-slow"></div>
                <div class="absolute w-64 h-64 lg:w-[340px] lg:h-[340px] rounded-full border border-tv-indigo/10 animate-spin-slow" style="animation-direction: reverse; animation-duration: 15s;"></div>

                {{-- Central Fingerprint SVG (Bootstrap Icons bi-fingerprint) --}}
                <div class="relative fingerprint-glow animate-float">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="w-56 h-56 lg:w-72 lg:h-72">
                        <defs>
                            <linearGradient id="fpGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#8b5cf6"/>
                                <stop offset="50%" style="stop-color:#6366f1"/>
                                <stop offset="100%" style="stop-color:#22d3ee"/>
                            </linearGradient>
                        </defs>
                        <g fill="url(#fpGrad)">
                            <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                            <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332q0 .613-.066 1.221A.5.5 0 0 1 6 8.447q.06-.555.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8m-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329"/>
                            <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334m.3 1.67a.5.5 0 0 1 .449.546 10.7 10.7 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.7 9.7 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                            <path d="M3.902 4.222a5 5 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 4 4 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556m6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705M3.68 5.842a.5.5 0 0 1 .422.568q-.044.289-.044.59c0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.5 6.5 0 0 0 3.058 7q0-.375.054-.736a.5.5 0 0 1 .568-.422m8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.5 10.5 0 0 0 .584-2.678.5.5 0 0 1 .54-.456"/>
                            <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865m-.89 1.257a.5.5 0 0 1 .04.706A5.48 5.48 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346m12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49"/>
                        </g>
                        {{-- Scan line --}}
                        <line x1="0" y1="8" x2="16" y2="8" stroke="#22d3ee" stroke-width="0.15" opacity="0.4">
                            <animate attributeName="y1" values="0;16;0" dur="4s" repeatCount="indefinite"/>
                            <animate attributeName="y2" values="0;16;0" dur="4s" repeatCount="indefinite"/>
                        </line>
                        <line x1="0" y1="8" x2="16" y2="8" stroke="#22d3ee" stroke-width="0.5" opacity="0.1">
                            <animate attributeName="y1" values="0;16;0" dur="4s" repeatCount="indefinite"/>
                            <animate attributeName="y2" values="0;16;0" dur="4s" repeatCount="indefinite"/>
                        </line>
                    </svg>
                </div>

                {{-- Floating Labels --}}
                <div class="absolute -top-2 right-4 lg:right-0 glass-card px-3 py-2 text-xs text-tv-text-muted animate-float" style="animation-delay: 1s;">
                    <span class="text-tv-cyan">◆</span> Analisis AI
                </div>
                <div class="absolute -bottom-2 left-4 lg:left-0 glass-card px-3 py-2 text-xs text-tv-text-muted animate-float" style="animation-delay: 2s;">
                    <span class="text-tv-violet-light">◆</span> 99.8% Presisi
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
            {{-- Left: Visual --}}
            <div class="reveal">
                <div class="relative">
                    <div class="glass-card p-8 lg:p-12">
                        <div class="grid grid-cols-2 gap-4">
                            {{-- Stat Cards --}}
                            <div class="bg-tv-violet/10 rounded-xl p-5 border border-tv-violet/10">
                                <svg class="w-8 h-8 text-tv-violet-light mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a48.667 48.667 0 00-1.239 11.427M12 1.5a6 6 0 00-5.693 4.078M12 1.5a6 6 0 015.693 4.078" />
                                </svg>
                                <div class="text-2xl font-bold text-white">16</div>
                                <div class="text-xs text-tv-text-muted mt-1">Tipe Kepribadian</div>
                            </div>
                            <div class="bg-tv-indigo/10 rounded-xl p-5 border border-tv-indigo/10">
                                <svg class="w-8 h-8 text-tv-cyan mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                </svg>
                                <div class="text-2xl font-bold text-white">200+</div>
                                <div class="text-xs text-tv-text-muted mt-1">Parameter Analisis</div>
                            </div>
                            <div class="bg-tv-cyan/5 rounded-xl p-5 border border-tv-cyan/10 col-span-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-tv-violet to-tv-cyan flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-white">Tersertifikasi & Terpercaya</div>
                                        <div class="text-xs text-tv-text-muted">Didukung riset dermatoglifi internasional</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Decorative Blur --}}
                    <div class="absolute -z-10 -top-8 -left-8 w-40 h-40 bg-tv-violet/20 rounded-full blur-[80px]"></div>
                </div>
            </div>

            {{-- Right: Text --}}
            <div class="reveal" style="transition-delay: 0.2s;">
                <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Tentang Talent Verse</h2>
                <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-6">
                    Kenali Diri Anda Lebih Dalam dengan
                    <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Teknologi Biometrik</span>
                </h3>
                <p class="text-tv-text-muted leading-relaxed mb-6">
                    Talent Verse adalah platform inovatif yang memanfaatkan ilmu <strong class="text-white font-medium">dermatoglifi</strong> — studi tentang pola sidik jari — untuk mengungkap potensi tersembunyi dalam diri Anda. Setiap sidik jari adalah unik, dan di balik pola tersebut tersimpan informasi berharga tentang kepribadian, bakat alami, dan gaya belajar Anda.
                </p>
                <p class="text-tv-text-muted leading-relaxed mb-8">
                    Dengan menggunakan teknologi pemindaian canggih dan algoritma AI, kami menganalisis pola sidik jari secara mendalam untuk memberikan insight yang akurat dan actionable tentang siapa Anda sebenarnya.
                </p>

                <div class="flex flex-col gap-4">
                    <div class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-tv-violet/20 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-tv-violet-light" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm text-tv-text-muted">Berbasis ilmu pengetahuan dan riset dermatoglifi</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-tv-violet/20 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-tv-violet-light" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm text-tv-text-muted">Proses cepat, aman, dan non-invasif</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-tv-violet/20 flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-tv-violet-light" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm text-tv-text-muted">Laporan detail dengan rekomendasi personal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider max-w-4xl mx-auto"></div>


{{-- ============================================
     HOW IT WORKS / CARA KERJA SECTION
     ============================================ --}}
<section id="cara-kerja" class="relative py-24 lg:py-32">
    {{-- Background Accent --}}
    <div class="absolute top-0 right-0 w-80 h-80 bg-tv-indigo/10 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20 reveal">
            <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Cara Kerja</h2>
            <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
                Tiga Langkah Sederhana untuk
                <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Mengenal Diri</span>
            </h3>
            <p class="text-tv-text-muted leading-relaxed">
                Proses yang mudah, cepat, dan menyenangkan untuk mengungkap siapa Anda sebenarnya.
            </p>
        </div>

        {{-- Steps --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 relative">
            {{-- Connector Line (desktop only) --}}
            <div class="hidden md:block absolute top-16 left-[20%] right-[20%] h-[1px] bg-gradient-to-r from-tv-violet/30 via-tv-indigo/30 to-tv-cyan/30"></div>

            {{-- Step 1 --}}
            <div class="reveal text-center" style="transition-delay: 0.1s;">
                <div class="relative inline-flex mb-6">
                    <div class="step-number">1</div>
                </div>
                <div class="glass-card p-6 lg:p-8">
                    <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-tv-violet/10 border border-tv-violet/15 flex items-center justify-center">
                        <svg class="w-7 h-7 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a48.667 48.667 0 00-1.239 11.427M12 1.5a6 6 0 00-5.693 4.078M12 1.5a6 6 0 015.693 4.078" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-3">Pindai Sidik Jari</h4>
                    <p class="text-sm text-tv-text-muted leading-relaxed">
                        Upload foto atau gunakan scanner untuk menangkap pola unik sidik jari Anda secara digital.
                    </p>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="reveal text-center" style="transition-delay: 0.3s;">
                <div class="relative inline-flex mb-6">
                    <div class="step-number">2</div>
                </div>
                <div class="glass-card p-6 lg:p-8">
                    <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-tv-indigo/10 border border-tv-indigo/15 flex items-center justify-center">
                        <svg class="w-7 h-7 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-3">Analisis AI Mendalam</h4>
                    <p class="text-sm text-tv-text-muted leading-relaxed">
                        Algoritma cerdas kami menganalisis 200+ parameter dari pola sidik jari Anda secara real-time.
                    </p>
                </div>
            </div>

            {{-- Step 3 --}}
            <div class="reveal text-center" style="transition-delay: 0.5s;">
                <div class="relative inline-flex mb-6">
                    <div class="step-number">3</div>
                </div>
                <div class="glass-card p-6 lg:p-8">
                    <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-tv-cyan/10 border border-tv-cyan/15 flex items-center justify-center">
                        <svg class="w-7 h-7 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-3">Dapatkan Insight</h4>
                    <p class="text-sm text-tv-text-muted leading-relaxed">
                        Terima laporan kepribadian komprehensif beserta rekomendasi pengembangan diri Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-divider max-w-4xl mx-auto"></div>


{{-- ============================================
     BENEFITS / MANFAAT SECTION
     ============================================ --}}
<section id="manfaat" class="relative py-24 lg:py-32">
    {{-- Background Accent --}}
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-tv-violet/10 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20 reveal">
            <h2 class="text-sm font-semibold uppercase tracking-widest text-tv-violet-light mb-3">Manfaat</h2>
            <h3 class="text-3xl lg:text-4xl font-bold text-white leading-tight mb-4">
                Mengapa Memilih
                <span class="bg-gradient-to-r from-tv-violet to-tv-cyan bg-clip-text text-transparent">Talent Verse?</span>
            </h3>
            <p class="text-tv-text-muted leading-relaxed">
                Lebih dari sekadar tes kepribadian — temukan potensi sejati Anda.
            </p>
        </div>

        {{-- Benefits Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            {{-- Benefit 1 --}}
            <div class="glass-card p-6 lg:p-8 reveal" style="transition-delay: 0.1s;">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-violet/20 to-tv-violet/5 border border-tv-violet/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <h4 class="text-base font-bold text-white mb-2">Kenali Potensi Diri</h4>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Pahami kekuatan, bakat alami, dan area pengembangan Anda berdasarkan pola biometrik unik.
                </p>
            </div>

            {{-- Benefit 2 --}}
            <div class="glass-card p-6 lg:p-8 reveal" style="transition-delay: 0.2s;">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-indigo/20 to-tv-indigo/5 border border-tv-indigo/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </div>
                <h4 class="text-base font-bold text-white mb-2">Panduan Karier</h4>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Dapatkan rekomendasi jalur karier yang sesuai dengan kepribadian dan potensi bawaan Anda.
                </p>
            </div>

            {{-- Benefit 3 --}}
            <div class="glass-card p-6 lg:p-8 reveal" style="transition-delay: 0.3s;">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-cyan/20 to-tv-cyan/5 border border-tv-cyan/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>
                <h4 class="text-base font-bold text-white mb-2">Insight Personal Unik</h4>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Setiap laporan bersifat personal dan unik — tidak ada dua hasil yang sama, selayaknya sidik jari Anda.
                </p>
            </div>

            {{-- Benefit 4 --}}
            <div class="glass-card p-6 lg:p-8 reveal" style="transition-delay: 0.4s;">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-tv-violet/20 to-tv-cyan/10 border border-tv-violet/10 flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-tv-violet-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.62 48.62 0 0112 20.904a48.62 48.62 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342" />
                    </svg>
                </div>
                <h4 class="text-base font-bold text-white mb-2">Pengembangan Optimal</h4>
                <p class="text-sm text-tv-text-muted leading-relaxed">
                    Rancang strategi belajar dan pengembangan yang efektif berdasarkan profil kepribadian Anda.
                </p>
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

        <h2 class="text-3xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
            Siap Mengeksplorasi
            <span class="bg-gradient-to-r from-tv-violet via-tv-violet-light to-tv-cyan bg-clip-text text-transparent">
                Potensi Terbaik
            </span>
            Anda?
        </h2>

        <p class="text-lg text-tv-text-muted leading-relaxed max-w-2xl mx-auto mb-10">
            Bergabunglah dengan ribuan orang yang telah menemukan kepribadian unik mereka melalui Talent Verse. Mulai perjalanan self-discovery Anda hari ini.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="btn-gradient text-white font-bold px-10 py-4 rounded-full text-lg inline-flex items-center justify-center gap-2">
                Mulai Analisis Sekarang
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="#tentang" class="btn-ghost text-tv-text-muted font-semibold px-10 py-4 rounded-full text-lg inline-flex items-center justify-center gap-2">
                Lihat Demo
            </a>
        </div>

        {{-- Trust Badges --}}
        <div class="mt-12 flex flex-wrap items-center justify-center gap-6 text-xs text-tv-text-muted">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Gratis Konsultasi Awal
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Data Aman & Terenkripsi
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Hasil dalam 24 Jam
            </div>
        </div>
    </div>
</section>

@endsection
