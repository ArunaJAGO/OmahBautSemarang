@extends('layouts.app')

@section('content')

<!-- =========================================================================
     1. HERO SECTION (Background Krem #FDF8D8 & #FFFBE6)
     ========================================================================= -->
<section id="beranda" class="relative bg-gradient-to-b from-cream via-cream-light to-white pt-10 pb-16 lg:pt-16 lg:pb-24 overflow-hidden border-b border-stone-200 pattern-grid">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Copywriting & CTA (7 cols) -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <!-- Headline Besar (Oswald) -->
                <h1 class="hero-title font-oswald text-4xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-tight text-charcoal leading-[1.12]">
                    <span class="whitespace-nowrap">SCREW BAJA RINGAN,</span>
                    <span class="whitespace-nowrap">DYNABOLT &amp;</span>
                    <span class="hl-marker text-maroon whitespace-nowrap">PEREDAM PANAS</span>
                    <span class="whitespace-nowrap">TERLENGKAP</span>
                </h1>

                <!-- Sub-Headline -->
                <p class="text-base sm:text-lg text-stone-700 leading-relaxed max-w-2xl font-normal">
                    Sedia Screw <strong class="text-charcoal font-bold">NAGA BOLT</strong> & <strong class="text-charcoal font-bold">FUJI FASTENER'S</strong>, Dynabolt <strong class="text-charcoal font-bold">LHC</strong>, serta Aluminium Foil & Bubble Foil. Tajam, Kuat, Presisi & Harga Ekonomis untuk Proyek maupun Eceran.
                </p>

                <!-- Tombol CTA Utama & Sekunder -->
                <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                    <!-- Tombol Sosial Media (Instagram & Facebook) -->
                    <div class="flex items-center gap-3">
                        <a href="{{ $store['instagram_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="lg-card lg-glass lg-shine inline-flex items-center justify-center gap-2.5 px-5 py-4 rounded-xl text-charcoal font-oswald text-lg uppercase tracking-wider hover:text-maroon active:scale-95"
                           aria-label="Instagram Omah Baut Semarang">
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-[#F9A03F] via-[#E1306C] to-[#833AB4] text-white shadow-[0_4px_10px_rgba(225,48,108,0.35),inset_0_1px_0_rgba(255,255,255,0.4)]">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.3" cy="6.7" r="1" fill="currentColor" stroke="none"/></svg>
                            </span>
                            Instagram
                        </a>
                        <a href="{{ $store['facebook_url'] }}" target="_blank" rel="noopener noreferrer"
                           class="lg-card lg-glass lg-shine inline-flex items-center justify-center gap-2.5 px-5 py-4 rounded-xl text-charcoal font-oswald text-lg uppercase tracking-wider hover:text-maroon active:scale-95"
                           aria-label="Facebook Omah Baut Semarang">
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-b from-[#2D8CFF] to-[#1877F2] text-white shadow-[0_4px_10px_rgba(24,119,242,0.35),inset_0_1px_0_rgba(255,255,255,0.4)]">
                                <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 22v-8.2h2.8l.5-3.3h-3.3V8.4c0-.9.4-1.7 1.8-1.7h1.6V3.8c-.3 0-1.3-.2-2.4-.2-2.5 0-4.1 1.5-4.1 4.2v2.7H7.6v3.3h2.8V22h3.1z"/></svg>
                            </span>
                            Facebook
                        </a>
                    </div>

                    <!-- Tombol Sekunder (Katalog) -->
                    <a href="#katalog" 
                       class="inline-flex items-center justify-center px-6 py-4 bg-white hover:bg-stone-50 text-charcoal font-oswald text-lg uppercase tracking-wider rounded-lg border-2 border-charcoal shadow-sm hover:shadow active:scale-95 transition-all duration-200">
                        Lihat Katalog Produk
                        <svg class="w-5 h-5 ml-2 text-maroon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>

                <!-- Trust Points Bawah CTA -->
                <div class="mt-2 grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div class="lg-card lg-glass flex items-center gap-3 rounded-2xl px-4 py-3.5">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-b from-maroon-light to-maroon-dark text-white shadow-[0_4px_10px_rgba(139,26,26,0.35),inset_0_1px_0_rgba(255,255,255,0.4)]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </span>
                        <span class="flex flex-col leading-tight">
                            <span class="font-oswald text-base font-bold uppercase tracking-wide text-charcoal">Stok Ready</span>
                            <span class="mt-0.5 text-[13px] font-medium text-stone-700">Dus &amp; eceran tersedia</span>
                        </span>
                    </div>
                    <div class="lg-card lg-glass flex items-center gap-3 rounded-2xl px-4 py-3.5">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-b from-maroon-light to-maroon-dark text-white shadow-[0_4px_10px_rgba(139,26,26,0.35),inset_0_1px_0_rgba(255,255,255,0.4)]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5a1.99 1.99 0 011.41.59l7 7a2 2 0 010 2.82l-5 5a2 2 0 01-2.82 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/></svg>
                        </span>
                        <span class="flex flex-col leading-tight">
                            <span class="font-oswald text-base font-bold uppercase tracking-wide text-charcoal">Harga Proyek</span>
                            <span class="mt-0.5 text-[13px] font-medium text-stone-700">Aplikator &amp; kontraktor</span>
                        </span>
                    </div>
                    <div class="lg-card lg-glass flex items-center gap-3 rounded-2xl px-4 py-3.5">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-b from-maroon-light to-maroon-dark text-white shadow-[0_4px_10px_rgba(139,26,26,0.35),inset_0_1px_0_rgba(255,255,255,0.4)]">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h11v9H3zM14 10h4l3 3v3h-7M7 19a2 2 0 100-4 2 2 0 000 4zm10 0a2 2 0 100-4 2 2 0 000 4z"/></svg>
                        </span>
                        <span class="flex flex-col leading-tight">
                            <span class="font-oswald text-base font-bold uppercase tracking-wide text-charcoal">Siap Kirim</span>
                            <span class="mt-0.5 text-[13px] font-medium text-stone-700">Area Semarang</span>
                        </span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Kartu Highlight Visual (5 cols) -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-2xl border-2 border-charcoal p-6 sm:p-7 shadow-hard relative">
                    
                    <!-- Decorative Tape Badge -->
                    <div class="absolute -top-3.5 left-6 bg-charcoal text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow-sm">
                        Katalog Unggulan Toko
                    </div>

                    <!-- Highlight Header with Brand Logo -->
                    <div class="flex items-center justify-between border-b border-stone-200 pb-4 mb-5 pt-1">
                        <div>
                            <span class="text-xs uppercase tracking-wider font-bold text-maroon block">Ready di Toko Hari Ini</span>
                            <h2 class="font-oswald text-2xl font-bold uppercase text-charcoal">3 Kategori Material Utama</h2>
                        </div>
                        <div class="bg-cream-light p-1.5 rounded-xl border border-stone-300 shadow-sm shrink-0">
                            <x-logo class="h-12 w-auto" />
                        </div>
                    </div>

                    <!-- 3 Category Highlights List -->
                    <div class="space-y-4">
                        
                        <!-- Item 1: Screw NAGA & FUJI -->
                        <div class="flex items-center justify-between p-3.5 rounded-xl bg-red-50/50 backdrop-blur-sm border border-red-200/80 hover:border-red-400 lg-card">
                            <div class="flex items-center space-x-3.5">
                                <div class="w-11 h-11 rounded-lg bg-maroon text-white flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                    <svg class="w-6 h-6 fill-none stroke-current" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20M8 6l8 4M8 12l8 4M8 18l4 2" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-lg font-bold text-charcoal leading-tight">Screw (Sekrup) Baja Ringan</h3>
                                    <p class="text-xs text-stone-600">Merek Resmi: <strong class="text-maroon">NAGA BOLT & FUJI</strong></p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-maroon bg-white px-2.5 py-1 rounded border border-red-200 shrink-0">Dus / Ecer</span>
                        </div>

                        <!-- Item 2: Dynabolt LHC -->
                        <div class="flex items-center justify-between p-3.5 rounded-xl bg-amber-50/50 backdrop-blur-sm border border-amber-200/80 hover:border-amber-400 lg-card">
                            <div class="flex items-center space-x-3.5">
                                <div class="w-11 h-11 rounded-lg bg-amber-500 text-charcoal flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                    <svg class="w-6 h-6 fill-none stroke-current" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-lg font-bold text-charcoal leading-tight">Dynabolt Beton & Angkur</h3>
                                    <p class="text-xs text-stone-600">Merek Resmi: <strong class="text-amber-700">LHC Heavy Duty</strong></p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-amber-800 bg-white px-2.5 py-1 rounded border border-amber-200 shrink-0">M8 – M16</span>
                        </div>

                        <!-- Item 3: Insulation / Peredam Panas -->
                        <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-50/60 backdrop-blur-sm border border-slate-200/80 hover:border-slate-400 lg-card">
                            <div class="flex items-center space-x-3.5">
                                <div class="w-11 h-11 rounded-lg bg-slate-700 text-white flex items-center justify-center font-bold text-xl shrink-0 shadow-sm">
                                    <svg class="w-6 h-6 fill-none stroke-current" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-oswald text-lg font-bold text-charcoal leading-tight">Insulation (Peredam Panas)</h3>
                                    <p class="text-xs text-stone-600">Aluminium Foil & Bubble Foil</p>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-slate-800 bg-white px-2.5 py-1 rounded border border-slate-200 shrink-0">Roll / Meter</span>
                        </div>

                    </div>

                    <!-- Highlight Nomor Telepon Ber-Highlight Kuning #FFE600 -->
                    <div class="mt-6 pt-5 border-t border-stone-200 bg-cream rounded-xl p-4 border border-stone-300">
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-[11px] font-bold uppercase text-stone-600 block">Hubungi Langsung Admin Toko:</span>
                                <div class="mt-0.5 inline-block bg-brandyellow px-3 py-1 rounded-md border border-charcoal shadow-sm">
                                    <span class="font-oswald text-xl sm:text-2xl font-black text-charcoal tracking-wide">
                                        0813-6795-4763
                                    </span>
                                </div>
                            </div>
                            <a href="https://wa.me/6281367954763" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="inline-flex items-center px-4 py-2 bg-wagreen text-white font-bold text-xs uppercase tracking-wider rounded-md hover:bg-wagreen-hover active:scale-95 transition shadow-sm">
                                Chat Sekarang
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================================================================
     5. TENTANG KAMI & KEUNGGULAN (Why Choose Us)
     ========================================================================= -->
<section id="tentang" class="py-16 sm:py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Profil & Komitmen (6 cols) -->
            <div class="lg:col-span-6 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-maroon block mb-1">
                        Profil Omah Baut Semarang
                    </span>
                    <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase text-charcoal tracking-tight">
                        Mitra Andal Kebutuhan Baut & Peredam Panas di Semarang
                    </h2>
                    <div class="w-16 h-1 bg-maroon mt-3 rounded-full"></div>
                </div>

                <div class="space-y-4 text-stone-600 text-sm sm:text-base leading-relaxed">
                    <p>
                        Berlokasi strategis di <strong>Jl. Tlogo Mukti Raya No.925, Tlogosari Kulon, Pedurungan, Kota Semarang</strong>, OMAH BAUT SEMARANG hadir menjawab kebutuhan para aplikator konstruksi ringan, kontraktor bangunan, bengkel las, hingga pemilik rumah yang membutuhkan suplai material pengikat bermutu tinggi.
                    </p>
                    <p>
                        Kami memahami bahwa baut yang mudah tumpul atau patah akan menghabiskan waktu kerja tukang di lapangan. Oleh karena itu, kami secara konsisten hanya mendistribusikan merek-merek ternama seperti <strong>NAGA BOLT</strong>, <strong>FUJI FASTENER'S</strong>, dan <strong>LHC</strong> yang telah terbukti tajam, presisi, dan kokoh.
                    </p>
                    <p>
                        Selain baut pengencang, kami juga menyediakan solusi insulasi atap lengkap berupa <strong>Aluminium Foil Woven</strong> dan <strong>Bubble Foil</strong> untuk meredam suhu panas tropis dan meredam gemuruh air hujan pada atap galvalum maupun spandek.
                    </p>
                </div>

                <!-- 3 Quick Pillars of Service -->
                <div class="pt-2 grid grid-cols-3 gap-3 border-t border-stone-200">
                    <div class="p-3 bg-stone-50 rounded-lg text-center">
                        <span class="font-oswald text-2xl font-bold text-maroon block">100%</span>
                        <span class="text-[11px] text-stone-600 font-semibold leading-tight block">Produk Original</span>
                    </div>
                    <div class="p-3 bg-stone-50 rounded-lg text-center">
                        <span class="font-oswald text-2xl font-bold text-maroon block">READY</span>
                        <span class="text-[11px] text-stone-600 font-semibold leading-tight block">Stok Dus & Roll</span>
                    </div>
                    <div class="p-3 bg-stone-50 rounded-lg text-center">
                        <span class="font-oswald text-2xl font-bold text-maroon block">FAST</span>
                        <span class="text-[11px] text-stone-600 font-semibold leading-tight block">Respon WhatsApp</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: 4 Keunggulan Toko Grid (6 cols) -->
            <div class="lg:col-span-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    
                    @foreach($advantages as $adv)
                        <div class="bg-cream-light/60 border border-stone-200 hover:border-maroon p-6 rounded-2xl shadow-sm hover:shadow-md transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-white text-maroon border border-stone-200 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform shadow-sm">
                                @if($adv['icon'] === 'box')
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                @elseif($adv['icon'] === 'badge-check')
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                @elseif($adv['icon'] === 'tag')
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                                @else
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                                @endif
                            </div>
                            <h3 class="font-oswald text-lg font-bold uppercase text-charcoal mb-2">
                                {{ $adv['title'] }}
                            </h3>
                            <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
                                {{ $adv['desc'] }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================================
     2. SHOWCASE MEREK UNGGULAN (Brand Highlights)
     ========================================================================= -->
<section id="merek" class="py-16 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-maroon block mb-1">
                Jaminan Kualitas Material
            </span>
            <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase text-charcoal tracking-tight">
                Merek Resmi & Unggulan di Omah Baut Semarang
            </h2>
            <div class="w-16 h-1 bg-maroon mx-auto mt-3 mb-4 rounded-full"></div>
            <p class="text-stone-600 text-sm sm:text-base">
                Kami hanya menyediakan merek-merek yang telah teruji mutunya di ratusan proyek konstruksi, disukai para tukang karena tajam, presisi, dan tidak mudah patah.
            </p>
        </div>

        <!-- 3 Brand Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Brand 1: NAGA BOLT -->
            <div class="bg-gradient-to-b from-stone-50 to-white rounded-2xl border-2 border-red-700 p-6 sm:p-8 flex flex-col justify-between shadow-industrial hover:-translate-y-1 transition-all duration-300 relative group">
                <div class="absolute -top-3.5 right-6 bg-red-700 text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow">
                    100% Kualitas Teruji
                </div>
                <div>
                    <!-- Gambar Produk -->
                    <button type="button"
                            @click="$dispatch('lg-zoom', { src: '{{ asset('images/brands/naga-bolt.jpg') }}', alt: 'Skrup Baja Ringan NAGA BOLT' })"
                            class="group/img relative mb-5 block w-full aspect-square overflow-hidden rounded-xl border border-stone-200 bg-stone-100 shadow-sm focus:outline-none focus:ring-2 focus:ring-maroon"
                            aria-label="Perbesar gambar Skrup Baja Ringan NAGA BOLT">
                        <img src="{{ asset('images/brands/naga-bolt.jpg') }}" alt="Skrup Baja Ringan NAGA BOLT" width="1000" height="1000" loading="lazy"
                             class="h-full w-full object-contain transition-transform duration-500 group-hover/img:scale-105">
                        <span class="absolute bottom-2 right-2 inline-flex items-center gap-1 rounded-full border border-white/70 bg-white/70 px-2.5 py-1 text-[11px] font-bold text-charcoal shadow backdrop-blur-md">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 8v6M8 11h6M19 11a8 8 0 11-16 0 8 8 0 0116 0z"/></svg>
                            Perbesar
                        </span>
                    </button>

                    <!-- Brand Header -->
                    <div class="border-b-2 border-red-100 pb-4 mb-5">
                        <span class="text-xs font-bold text-red-700 uppercase tracking-wider block">Skrup Baja Ringan</span>
                        <h3 class="font-oswald text-3xl font-bold text-charcoal group-hover:text-red-700 transition-colors">
                            NAGA BOLT
                        </h3>
                        <p class="font-sans italic font-bold text-sm text-red-600 mt-1">
                            "Tajam, Rapat, Cepat, Kuat & Presisi"
                        </p>
                    </div>

                    <p class="text-xs sm:text-sm text-stone-600 leading-relaxed mb-6">
                        Pilihan nomor satu aplikator profesional. Terbuat dari baja karbon berkualitas dengan lapisan zinc anti-karat, mata bor super tajam tembus reng dan truss tanpa selip.
                    </p>

                    <!-- Features List -->
                    <ul class="space-y-2.5 text-xs sm:text-sm text-stone-700 mb-6">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-red-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Material baja karbon bermutu tinggi tahan korosi</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-red-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Mata bor tajam & ulir presisi (anti slek)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-red-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Kemasan dus pabrik (1.000 pcs) & eceran</span>
                        </li>
                    </ul>
                </div>

                <a href="https://wa.me/6281367954763?text=Halo%20Admin%20Omah%20Baut%20Semarang,%20saya%20mau%20tanya%20harga%20dan%20stok%20Screw%20NAGA%20BOLT." 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-lg bg-red-700 hover:bg-red-800 text-white font-oswald text-sm uppercase tracking-wider font-semibold transition active:scale-95 shadow-sm">
                    Tanya Stok NAGA BOLT
                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Brand 2: FUJI FASTENER'S -->
            <div class="bg-gradient-to-b from-stone-50 to-white rounded-2xl border-2 border-amber-600 p-6 sm:p-8 flex flex-col justify-between shadow-industrial hover:-translate-y-1 transition-all duration-300 relative group">
                <div class="absolute -top-3.5 right-6 bg-amber-600 text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow">
                    Pilihan Cerdas & Hemat
                </div>
                <div>
                    <!-- Gambar Produk -->
                    <button type="button"
                            @click="$dispatch('lg-zoom', { src: '{{ asset('images/brands/fuji-fasteners.jpg') }}', alt: 'Drill Self-Drilling Screws FUJI Fasteners' })"
                            class="group/img relative mb-5 block w-full aspect-square overflow-hidden rounded-xl border border-stone-200 bg-stone-100 shadow-sm focus:outline-none focus:ring-2 focus:ring-maroon"
                            aria-label="Perbesar gambar Drill Self-Drilling Screws FUJI FASTENER'S">
                        <img src="{{ asset('images/brands/fuji-fasteners.jpg') }}" alt="Drill Self-Drilling Screws FUJI FASTENER'S" width="1000" height="1000" loading="lazy"
                             class="h-full w-full object-contain transition-transform duration-500 group-hover/img:scale-105">
                        <span class="absolute bottom-2 right-2 inline-flex items-center gap-1 rounded-full border border-white/70 bg-white/70 px-2.5 py-1 text-[11px] font-bold text-charcoal shadow backdrop-blur-md">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 8v6M8 11h6M19 11a8 8 0 11-16 0 8 8 0 0116 0z"/></svg>
                            Perbesar
                        </span>
                    </button>

                    <!-- Brand Header -->
                    <div class="border-b-2 border-amber-100 pb-4 mb-5">
                        <span class="text-xs font-bold text-amber-700 uppercase tracking-wider block">Drill Self-Drilling Screws</span>
                        <h3 class="font-oswald text-3xl font-bold text-charcoal group-hover:text-amber-700 transition-colors">
                            FUJI FASTENER'S
                        </h3>
                        <p class="font-sans italic font-bold text-sm text-amber-700 mt-1">
                            "Ekonomis Tetap Kuat!"
                        </p>
                    </div>

                    <p class="text-xs sm:text-sm text-stone-600 leading-relaxed mb-6">
                        Solusi cerdas menekan anggaran konstruksi tanpa mengurangi kualitas sambungan rangka. Terkenal konsisten dan menjadi andalan bengkel las & proyek perumahan.
                    </p>

                    <!-- Features List -->
                    <ul class="space-y-2.5 text-xs sm:text-sm text-stone-700 mb-6">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-amber-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Harga ekonomis untuk pemakaian skala besar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-amber-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Ujung drill tajam mempercepat pemasangan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-amber-600 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Tersedia tipe baja ringan, roofing & gipsum</span>
                        </li>
                    </ul>
                </div>

                <a href="https://wa.me/6281367954763?text=Halo%20Admin%20Omah%20Baut%20Semarang,%20saya%20mau%20tanya%20harga%20dan%20stok%20FUJI%20FASTENER'S." 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-lg bg-amber-600 hover:bg-amber-700 text-white font-oswald text-sm uppercase tracking-wider font-semibold transition active:scale-95 shadow-sm">
                    Tanya Stok FUJI
                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Brand 3: LHC Dynabolt -->
            <div class="bg-gradient-to-b from-stone-50 to-white rounded-2xl border-2 border-zinc-800 p-6 sm:p-8 flex flex-col justify-between shadow-industrial hover:-translate-y-1 transition-all duration-300 relative group">
                <div class="absolute -top-3.5 right-6 bg-zinc-800 text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded shadow">
                    Standar Beton Kokoh
                </div>
                <div>
                    <!-- Gambar Produk -->
                    <button type="button"
                            @click="$dispatch('lg-zoom', { src: '{{ asset('images/brands/lhc-dynabolt.jpg') }}', alt: 'LHC Dynabolt Heavy Duty' })"
                            class="group/img relative mb-5 block w-full aspect-square overflow-hidden rounded-xl border border-stone-200 bg-stone-100 shadow-sm focus:outline-none focus:ring-2 focus:ring-maroon"
                            aria-label="Perbesar gambar LHC Dynabolt Heavy Duty">
                        <img src="{{ asset('images/brands/lhc-dynabolt.jpg') }}" alt="LHC Dynabolt Heavy Duty" width="1000" height="835" loading="lazy"
                             class="h-full w-full object-contain transition-transform duration-500 group-hover/img:scale-105">
                        <span class="absolute bottom-2 right-2 inline-flex items-center gap-1 rounded-full border border-white/70 bg-white/70 px-2.5 py-1 text-[11px] font-bold text-charcoal shadow backdrop-blur-md">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 8v6M8 11h6M19 11a8 8 0 11-16 0 8 8 0 0116 0z"/></svg>
                            Perbesar
                        </span>
                    </button>

                    <!-- Brand Header -->
                    <div class="border-b-2 border-stone-200 pb-4 mb-5">
                        <span class="text-xs font-bold text-stone-600 uppercase tracking-wider block">Heavy-Duty Dynabolt</span>
                        <h3 class="font-oswald text-3xl font-bold text-charcoal group-hover:text-stone-900 transition-colors">
                            LHC DYNA
                        </h3>
                        <p class="font-sans italic font-bold text-sm text-stone-800 mt-1">
                            "Daya Cengkeram Kuat & Presisi"
                        </p>
                    </div>

                    <p class="text-xs sm:text-sm text-stone-600 leading-relaxed mb-6">
                        Baut tanam ekspansi beton spesialis pondasi tiang, kanopi, pagar dan konstruksi berat. Selongsong baja tebal memberikan daya ikat mekanis ekstra kuat pada beton.
                    </p>

                    <!-- Features List -->
                    <ul class="space-y-2.5 text-xs sm:text-sm text-stone-700 mb-6">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-zinc-800 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Selongsong ekspansi bergerigi mengikat mantap</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-zinc-800 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Drat rapi mempermudah penguncian mur</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-zinc-800 mr-2 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Ukuran lengkap: M8, M10, M12 hingga M16</span>
                        </li>
                    </ul>
                </div>

                <a href="https://wa.me/6281367954763?text=Halo%20Admin%20Omah%20Baut%20Semarang,%20saya%20mau%20tanya%20ukuran%20dan%20harga%20Dynabolt%20LHC." 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full inline-flex items-center justify-center py-2.5 px-4 rounded-lg bg-zinc-900 hover:bg-black text-white font-oswald text-sm uppercase tracking-wider font-semibold transition active:scale-95 shadow-sm">
                    Tanya Stok Dynabolt LHC
                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================================
     3. STRIP APLIKASI / KEGUNAAN (Use-Case Bar: 6 Item Grid)
     ========================================================================= -->
<section id="kegunaan" class="py-14 bg-stone-100 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-maroon block mb-1">
                Kebutuhan Material Anda
            </span>
            <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase text-charcoal">
                Solusi Pengencang Untuk Berbagai Konstruksi
            </h2>
            <p class="text-xs sm:text-sm text-stone-600 mt-1">
                Omah Baut Semarang menyediakan material pengikat & insulasi untuk 6 kebutuhan utama:
            </p>
        </div>

        <!-- 6 Use-Case Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
            
            <!-- 1. Rangka Atap -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-red-50 text-maroon flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Truss Roof Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-8 9 8M5 10.5V20a1 1 0 001 1h12a1 1 0 001-1v-9.5M12 4v17M7 16l5-5 5 5"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Rangka Atap</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Truss Kuda-kuda & Reng Galvalum</span>
            </div>

            <!-- 2. Plafon -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Ceiling Grid Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16M8 6v12M16 6v12"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Plafon</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Gypsum, GRC Board & PVC Hollow</span>
            </div>

            <!-- 3. Partisi -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-slate-100 text-slate-800 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Partition Wall Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 4v16M15 4v16M4 4h16a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Partisi</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Sekat Ruang & Dinding Kalsiboard</span>
            </div>

            <!-- 4. Pagar -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Fence Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v18M12 3v18M18 3v18M3 8h18M3 16h18M6 3l2-2 2 2M12 3l2-2 2 2M18 3l2-2 2 2"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Pagar</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Angkur Tiang Beton & Pagar Besi</span>
            </div>

            <!-- 5. Kanopi -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-cyan-50 text-cyan-700 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Canopy Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9-4 9 4v3a9 9 0 01-18 0V8zM6 11v8M18 11v8"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Kanopi</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Spandek, Alderon & Bubble Foil</span>
            </div>

            <!-- 6. Konstruksi Umum -->
            <div class="bg-white p-5 rounded-xl border border-stone-200 shadow-sm text-center hover:border-maroon hover:shadow-md transition-all group">
                <div class="w-12 h-12 mx-auto rounded-xl bg-stone-100 text-stone-800 flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                    <!-- Heavy Construction Crane / Beam Icon -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="font-oswald text-base sm:text-lg font-bold text-charcoal uppercase">Konstruksi Umum</h3>
                <span class="text-[11px] text-stone-500 block mt-1 leading-tight">Dudukan Mesin, Bracket AC & Rak</span>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================================
     4. KATALOG PRODUK INTERAKTIF (Filter Tab Alpine.js)
     ========================================================================= -->
<section id="katalog" class="py-16 sm:py-20 bg-stone-50" x-data="{ activeTab: 'semua' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Katalog -->
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-maroon block mb-1">
                Etalase Produk Lengkap
            </span>
            <h2 class="font-oswald text-3xl sm:text-4xl font-bold uppercase text-charcoal tracking-tight">
                Katalog Produk Omah Baut Semarang
            </h2>
            <div class="w-16 h-1 bg-maroon mx-auto mt-3 mb-4 rounded-full"></div>
            <p class="text-stone-600 text-sm sm:text-base">
                Klik tab kategori di bawah untuk memfilter jenis barang yang Anda cari. Seluruh produk dapat dipesan dalam jumlah eceran maupun kuantiti proyek.
            </p>
        </div>

        <!-- Alpine.js Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
            @foreach($categories as $cat)
                <button type="button" 
                        @click="activeTab = '{{ $cat['id'] }}'"
                        :class="activeTab === '{{ $cat['id'] }}' 
                            ? 'bg-maroon text-white border-maroon shadow-md scale-105' 
                            : 'bg-white text-stone-700 border-stone-300 hover:border-maroon hover:text-maroon'"
                        class="px-5 py-2.5 rounded-full border text-xs sm:text-sm font-oswald uppercase tracking-wider font-semibold transition-all duration-200 flex items-center space-x-2">
                    <span>{{ $cat['name'] }}</span>
                    <span :class="activeTab === '{{ $cat['id'] }}' ? 'bg-white/20 text-white' : 'bg-stone-200 text-stone-700'" 
                          class="px-2 py-0.5 text-[10px] rounded-full font-sans font-bold">
                        {{ $cat['count'] }}
                    </span>
                </button>
            @endforeach
        </div>

        <!-- Product Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($products as $p)
                <div x-show="activeTab === 'semua' || activeTab === '{{ $p['category'] }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="bg-white rounded-2xl border border-stone-300 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden group">
                    
                    <!-- Card Top: Visual Placeholder / Kemasan Khas Merek -->
                    <div class="relative bg-gradient-to-tr from-stone-100 via-stone-50 to-stone-200 p-6 border-b border-stone-200 flex flex-col items-center justify-center min-h-[190px] overflow-hidden">
                        
                        <!-- Watermark Background Text -->
                        <span class="absolute -right-2 -bottom-4 text-stone-200 font-oswald text-6xl font-black uppercase select-none opacity-40 pointer-events-none">
                            {{ $p['category'] }}
                        </span>

                        <!-- Brand Badge Floating -->
                        <div class="absolute top-3.5 left-3.5">
                            <span class="inline-block px-2.5 py-1 rounded text-[11px] font-bold font-oswald uppercase tracking-wider {{ $p['badge_color'] }} shadow-sm">
                                {{ $p['brand_tag'] }}
                            </span>
                        </div>

                        <!-- Visual Illustration Card Graphic -->
                        <div class="relative z-10 text-center py-2">
                            @if($p['category'] === 'screw')
                                <!-- Screw Graphic Illustration -->
                                <div class="w-20 h-20 mx-auto rounded-2xl bg-white border-2 border-red-600 shadow-md flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-12 h-12 text-red-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20M8 5l8 4M8 10l8 4M8 15l8 4M9 20l3 3 3-3" />
                                    </svg>
                                </div>
                            @elseif($p['category'] === 'dynabolt')
                                <!-- Dynabolt Graphic Illustration -->
                                <div class="w-20 h-20 mx-auto rounded-2xl bg-white border-2 border-amber-600 shadow-md flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-12 h-12 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                            @else
                                <!-- Foil Insulation Graphic Illustration -->
                                <div class="w-20 h-20 mx-auto rounded-2xl bg-white border-2 border-slate-600 shadow-md flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-12 h-12 text-slate-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                            @endif

                            <span class="inline-block mt-3 text-xs font-bold text-stone-700 bg-white/90 px-3 py-0.5 rounded-full border border-stone-300 shadow-sm">
                                {{ $p['head_style'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Merek & Nama Produk -->
                            <div class="mb-2">
                                <span class="text-xs font-bold text-maroon uppercase tracking-wide block">
                                    {{ $p['brand'] }}
                                </span>
                                <h3 class="font-oswald text-xl sm:text-2xl font-bold text-charcoal leading-snug group-hover:text-maroon transition-colors">
                                    {{ $p['name'] }}
                                </h3>
                            </div>

                            <p class="text-xs sm:text-sm text-stone-600 leading-relaxed mb-4">
                                {{ $p['description'] }}
                            </p>

                            <!-- Spesifikasi Singkat Box -->
                            <div class="bg-stone-50 rounded-lg p-3 text-xs space-y-1.5 border border-stone-200 mb-4">
                                <div>
                                    <strong class="text-charcoal font-semibold">Ukuran Ready:</strong>
                                    <span class="text-stone-700">{{ $p['sizes'] }}</span>
                                </div>
                                <div>
                                    <strong class="text-charcoal font-semibold">Kemasan:</strong>
                                    <span class="text-stone-700">{{ $p['packing'] }}</span>
                                </div>
                            </div>

                            <!-- Bullet Points Keunggulan -->
                            <ul class="space-y-1.5 text-xs text-stone-700 mb-6">
                                @foreach($p['highlights'] as $hl)
                                    <li class="flex items-start">
                                        <span class="text-wagreen-dark font-bold mr-1.5 shrink-0">✓</span>
                                        <span>{{ $hl }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Card CTA: Tanya Stok via WA -->
                        <div class="pt-2 border-t border-stone-100">
                            <a href="https://wa.me/6281367954763?text={{ urlencode($p['wa_text']) }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-full inline-flex items-center justify-center py-3 px-4 bg-wagreen hover:bg-wagreen-hover text-white font-oswald text-base uppercase tracking-wider font-bold rounded-lg shadow transition active:scale-95 group/btn">
                                <svg class="w-5 h-5 mr-2 fill-current text-white shrink-0 group-hover/btn:scale-110 transition-transform" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                                Tanya Stok & Harga
                            </a>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>

        <!-- Banner Bawah Katalog: Custom Request -->
        <div class="mt-12 bg-white rounded-2xl border-2 border-stone-200 p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-sm">
            <div class="space-y-1 text-center sm:text-left">
                <h3 class="font-oswald text-2xl font-bold uppercase text-charcoal">
                    Butuh Ukuran Khusus atau Mau Beli Partai Trukan?
                </h3>
                <p class="text-sm text-stone-600">
                    Kami melayani pengadaan proyek volume besar dengan faktur toko dan harga grosir langsung dari distributor.
                </p>
            </div>
            <a href="https://wa.me/6281367954763?text=Halo%20Admin%20Omah%20Baut%20Semarang,%20saya%20punya%20kebutuhan%20proyek%20spesifik%20dan%20ingin%20minta%20penawaran%20harga%20partai%20besar." 
               target="_blank" 
               rel="noopener noreferrer"
               class="shrink-0 px-6 py-3.5 bg-maroon hover:bg-maroon-dark text-white font-oswald text-base uppercase tracking-wider rounded-lg shadow active:scale-95 transition">
                Minta Penawaran Proyek
            </a>
        </div>

    </div>
</section>






<!-- =========================================================================
     6. ALUR PEMESANAN MUDAH VIA WHATSAPP (3 Langkah Cepat)
     ========================================================================= -->
<section class="py-14 bg-stone-100 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-maroon block mb-1">
                Proses Pembelian Praktis
            </span>
            <h2 class="font-oswald text-2xl sm:text-3xl font-bold uppercase text-charcoal">
                Cara Mudah Pesan & Tanya Stok
            </h2>
            <p class="text-xs sm:text-sm text-stone-600 mt-1">
                Tanpa ribet checkout keranjang belanja, Anda terhubung langsung dengan admin toko:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-2xl border border-stone-200 relative">
                <span class="absolute top-4 right-4 font-oswald text-3xl font-bold text-stone-200">01</span>
                <div class="w-10 h-10 rounded-full bg-red-100 text-maroon font-bold flex items-center justify-center mb-4">
                    1
                </div>
                <h3 class="font-oswald text-xl font-bold text-charcoal uppercase mb-2">Tentukan Kebutuhan</h3>
                <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
                    Pilih ukuran sekrup, dynabolt, atau foil peredam panas yang sesuai dengan spesifikasi pekerjaan konstruksi Anda (eceran atau dus).
                </p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-2xl border border-stone-200 relative">
                <span class="absolute top-4 right-4 font-oswald text-3xl font-bold text-stone-200">02</span>
                <div class="w-10 h-10 rounded-full bg-emerald-100 text-wagreen-dark font-bold flex items-center justify-center mb-4">
                    2
                </div>
                <h3 class="font-oswald text-xl font-bold text-charcoal uppercase mb-2">Chat WhatsApp Admin</h3>
                <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
                    Klik tombol WhatsApp untuk konfirmasi ketersediaan barang dan dapatkan kepastian harga terbaik serta estimasi total belanja.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-2xl border border-stone-200 relative">
                <span class="absolute top-4 right-4 font-oswald text-3xl font-bold text-stone-200">03</span>
                <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-700 font-bold flex items-center justify-center mb-4">
                    3
                </div>
                <h3 class="font-oswald text-xl font-bold text-charcoal uppercase mb-2">Ambil atau Dikirim</h3>
                <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
                    Pesanan dapat diambil langsung di toko Jl. Tlogo Mukti Raya No.925 Pedurungan atau dikirimkan ke lokasi proyek Anda di Semarang.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================================
     7. PRE-FOOTER CTA SECTION (Highlight Kontak & Konsultasi)
     ========================================================================= -->
<section class="py-14 bg-gradient-to-r from-maroon via-maroon-dark to-maroon text-white relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
        <span class="inline-block px-3 py-1 bg-white/10 rounded-full text-xs font-semibold uppercase tracking-wider text-stone-200 border border-white/20">
            Respon Cepat & Ramah
        </span>
        <h2 class="font-oswald text-3xl sm:text-4xl lg:text-5xl font-bold uppercase tracking-tight leading-tight">
            Konsultasikan Kebutuhan Baut & Insulasi Proyek Anda Sekarang!
        </h2>
        <p class="text-stone-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
            Butuh saran jenis baut yang paling pas untuk ketebalan profil Anda? Ingin cek ketersediaan roll bubble foil hari ini? Tim kami siap melayani Anda.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/6281367954763?text=Halo%20Admin%20Omah%20Baut%20Semarang,%20saya%20mau%20konsultasi%20stok%20dan%20harga%20baut." 
               target="_blank" 
               rel="noopener noreferrer"
               class="inline-flex items-center px-8 py-4 bg-wagreen hover:bg-wagreen-hover text-white font-oswald text-lg uppercase tracking-wider font-bold rounded-lg shadow-2xl active:scale-95 transition border border-emerald-400">
                <svg class="w-6 h-6 mr-3 fill-current text-white" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                Chat WhatsApp: 0813-6795-4763
            </a>
            <a href="#kontak" 
               class="inline-flex items-center px-6 py-4 bg-stone-900/80 hover:bg-stone-900 text-white font-oswald text-lg uppercase tracking-wider rounded-lg border border-stone-600 transition">
                Cek Alamat Toko & Peta
            </a>
        </div>
    </div>
</section>

@endsection