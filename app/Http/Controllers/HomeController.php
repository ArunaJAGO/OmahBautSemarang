<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the Omah Baut Semarang company profile landing page.
     */
    public function index()
    {
        $store = [
            'name' => 'OMAH BAUT SEMARANG',
            'tagline' => 'Pusat Screw Baja Ringan, Dynabolt & Peredam Panas Terlengkap di Semarang',
            'address' => 'Jl. Tlogo Mukti Raya No.925, Tlogosari Kulon, Kec. Pedurungan, Kota Semarang, Jawa Tengah 50196',
            'city' => 'Semarang',
            'province' => 'Jawa Tengah',
            'postal_code' => '50196',
            'phone' => '081367954763',
            'phone_display' => '0813-6795-4763',
            'whatsapp_url' => 'https://wa.me/6281367954763',
            'instagram_url' => 'https://www.instagram.com/GANTI_USERNAME_INSTAGRAM',
            'facebook_url' => 'https://www.facebook.com/people/Screw-Bajaringan/61592764678930/?rdid=EwPFnQyK9f2PtBja&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F19jEBCNSbC%2F',
            'hours' => 'Senin – Sabtu: 08.00 – 17.00 WIB',
            'hours_sub' => 'Minggu & Hari Libur: Tutup / Hubungi via WhatsApp untuk Janji Temu',
            'maps_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2185672159676!2d110.4593457!3d-6.9835157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c9096181f33%3A0x6a0a037b5874249a!2sJl.%20Tlogo%20Mukti%20Raya%20No.925%2C%20Tlogosari%20Kulon%2C%20Kec.%20Pedurungan%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050196!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid',
            'maps_direct_url' => 'https://maps.google.com/?q=Jl.+Tlogo+Mukti+Raya+No.925,+Tlogosari+Kulon,+Kec.+Pedurungan,+Kota+Semarang,+Jawa+Tengah+50196',
        ];

        $brands = [
            [
                'id' => 'naga',
                'name' => 'NAGA BOLT',
                'category' => 'Skrup Baja Ringan & Roofing',
                'tagline' => 'Tajam, Rapat, Cepat, Kuat & Presisi',
                'description' => 'Merek andalan utama para aplikator baja ringan profesional. Dibuat dengan material baja karbon bermutu tinggi, lapisan anti karat superior, dan ulir tajam presisi.',
                'badge' => '100% Kualitas Teruji',
                'features' => [
                    'Mata bor presisi, langsung tembus kanal C tanpa slip',
                    'Lapisan galvanis / zinc tahan cuaca tropis',
                    'Tersedia kemasan eceran dan dus pabrikan (1.000 pcs)',
                    'Kepala baut kokoh tidak mudah gompal / patah'
                ],
                'color_accent' => '#8B1A1A',
                'border_accent' => 'border-red-700',
                'bg_badge' => 'bg-red-700 text-white',
            ],
            [
                'id' => 'fuji',
                'name' => "FUJI FASTENER'S",
                'category' => 'Drill Self-Drilling Screws',
                'tagline' => 'Ekonomis Tetap Kuat!',
                'description' => 'Solusi cerdas material pengencang dengan efisiensi biaya terbaik tanpa mengorbankan kekuatan daya cengkeram konstruksi Anda.',
                'badge' => 'Pilihan Cerdas & Hemat',
                'features' => [
                    'Harga paling ekonomis untuk kebutuhan proyek volume besar',
                    'Ujung Self-Drilling tajam mempercepat durasi kerja tukang',
                    'Ulir rapat mengunci profil baja ringan dengan mantap',
                    'Stok selalu ready kontinyu setiap hari'
                ],
                'color_accent' => '#B22222',
                'border_accent' => 'border-amber-600',
                'bg_badge' => 'bg-amber-600 text-white',
            ],
            [
                'id' => 'lhc',
                'name' => 'LHC',
                'category' => 'Heavy-Duty Dynabolt & Anchor',
                'tagline' => 'Daya Cengkeram Kuat & Presisi',
                'description' => 'Baut tanam beton (dynabolt) spesialis pondasi dan struktur dinding. Menjamin ketahanan tarik maksimal pada media beton dan bata cor.',
                'badge' => 'Standar Beban Konstruksi',
                'features' => [
                    'Selongsong ekspansi baja tebal dengan sistem kunci rapat',
                    'Ulir presisi tinggi mempermudah pengencangan mur',
                    'Ukuran diameter dan panjang lengkap dari M8 hingga M16',
                    'Pilihan utama untuk tiang kanopi, rangka pagar, dan mesin'
                ],
                'color_accent' => '#1C1C1C',
                'border_accent' => 'border-zinc-800',
                'bg_badge' => 'bg-zinc-800 text-white',
            ],
        ];

        $use_cases = [
            [
                'name' => 'Rangka Atap',
                'subtitle' => 'Truss Kuda-kuda & Reng',
                'icon' => 'roof',
                'desc' => 'Screw baja ringan SDS & Dynabolt angkur dinding penyangga kuda-kuda.',
            ],
            [
                'name' => 'Plafon',
                'subtitle' => 'Gypsum, GRC & PVC',
                'icon' => 'ceiling',
                'desc' => 'Screw gipsum ulir tajam hitam untuk hollow galvalum & papan gipsum.',
            ],
            [
                'name' => 'Partisi',
                'subtitle' => 'Sekat Ruang & Kalsiboard',
                'icon' => 'partition',
                'desc' => 'Pengencang presisi tanpa merusak tepian lembaran gipsum & partisi.',
            ],
            [
                'name' => 'Pagar',
                'subtitle' => 'Besi, Woodplank & Hollow',
                'icon' => 'fence',
                'desc' => 'Dynabolt LHC kokoh untuk angkur tiang pagar & baut pengunci hollow.',
            ],
            [
                'name' => 'Kanopi',
                'subtitle' => 'Spandek, Alderon & Solarflat',
                'icon' => 'canopy',
                'desc' => 'Screw roofing kepala karet anti bocor & peredam bubble foil.',
            ],
            [
                'name' => 'Konstruksi Umum',
                'subtitle' => 'Gudang, Braket AC & Mesin',
                'icon' => 'construction',
                'desc' => 'Peredam panas aluminium foil serta pengencang struktur berat.',
            ],
        ];

        $categories = [
            ['id' => 'semua', 'name' => 'Semua Produk', 'count' => 6],
            ['id' => 'screw', 'name' => 'Screw (Sekrup)', 'count' => 3],
            ['id' => 'dynabolt', 'name' => 'Dynabolt (Angkur)', 'count' => 1],
            ['id' => 'insulation', 'name' => 'Insulation (Peredam)', 'count' => 2],
        ];

        $products = [
            [
                'id' => 1,
                'category' => 'screw',
                'name' => 'Screw Baja Ringan (Self-Drilling Screws)',
                'brand' => "NAGA BOLT & FUJI FASTENER'S",
                'brand_tag' => 'NAGA / FUJI',
                'head_style' => 'Hex Washer Head / Wafer Head Drill',
                'sizes' => '10x16 mm, 10x19 mm, 12x20 mm, 12x25 mm',
                'packing' => 'Tersedia Eceran per-biji & Dus Pabrik (1.000 pcs)',
                'description' => 'Sekrup mata bor tajam khusus baja ringan / truss galvalum. Tembus profil baja tebal dengan cepat tanpa perlu dilubangi terlebih dahulu.',
                'highlights' => [
                    'Ujung bor super tajam anti meleset',
                    'Flange hex head mengunci kokoh dengan kunci sok 8mm',
                    'Lapisan Zinc Plating putih anti korosi tinggi'
                ],
                'theme' => 'red',
                'badge_color' => 'bg-red-700 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya mau tanya stok dan harga untuk Screw Baja Ringan (Self-Drilling Screws) merk NAGA BOLT / FUJI FASTENER\'S. Berapa harga per dus dan eceran?',
            ],
            [
                'id' => 2,
                'category' => 'screw',
                'name' => 'Screw Roofing (Kepala Karet / EPDM Seal)',
                'brand' => "NAGA BOLT & FUJI FASTENER'S",
                'brand_tag' => 'NAGA / FUJI',
                'head_style' => 'Hex Head + High-Grade Rubber Ring (EPDM)',
                'sizes' => '12x25 mm, 12x35 mm, 12x50 mm, 12x70 mm',
                'packing' => 'Dus Pabrik (500 - 1.000 pcs) & Eceran',
                'description' => 'Sekrup atap dilengkapi ring karet EPDM elastis berkualitas tinggi untuk mencegah kebocoran air hujan dan rembesan pada gelombang atap seng/spandek.',
                'highlights' => [
                    'Karet EPDM tebal tahan cuaca panas & anti getas',
                    'Mata bor tajam melubangi atap spandek seketika',
                    'Drat dalam mengikat kencang pada rangka atap'
                ],
                'theme' => 'red',
                'badge_color' => 'bg-red-700 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya mau cek harga dan ketersediaan stok Screw Roofing kepala karet merk NAGA / FUJI ukuran 12x50 / 12x70. Mohon infonya ya.',
            ],
            [
                'id' => 3,
                'category' => 'screw',
                'name' => 'Screw Gipsum (Ulir Tajam Hitam / Drywall)',
                'brand' => "NAGA BOLT & FUJI FASTENER'S",
                'brand_tag' => 'NAGA / FUJI',
                'head_style' => 'Bugle Head (+) Black Phosphate Finish',
                'sizes' => '6x1" (25mm), 6x1-1/4" (32mm), 6x1-1/2" (40mm), 6x2" (50mm)',
                'packing' => 'Dus isi 600 - 1.000 pcs & Eceran',
                'description' => 'Sekrup gipsum hitam dengan ujung sangat runcing dan ulir mikro halus. Kepala trompet rata dengan permukaan gypsum tanpa merusak lapisan kertas.',
                'highlights' => [
                    'Lapisan Black Phosphate anti karat untuk plafon interior',
                    'Ujung jarum tajam langsung tembus hollow galvalum',
                    'Mata obeng plus presisi tidak gampang aus'
                ],
                'theme' => 'dark',
                'badge_color' => 'bg-zinc-800 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya mau tanya stok Screw Gipsum hitam ukuran 6x1 dan 6x1-1/4 merk NAGA / FUJI untuk kebutuhan proyek plafon. Ready stok berapa dus?',
            ],
            [
                'id' => 4,
                'category' => 'dynabolt',
                'name' => 'Dynabolt Beton LHC (Anchor Bolt Ekspansi)',
                'brand' => 'LHC',
                'brand_tag' => 'LHC ASLI',
                'head_style' => 'Heavy Duty Hex Nut + Spring Washer + Steel Sleeve',
                'sizes' => 'M8x40, M8x65, M10x50, M10x77, M10x100, M12x60, M12x99, M12x129, M16x120',
                'packing' => 'Kotak Pabrik & Satuan Eceran Bebas Pilih Ukuran',
                'description' => 'Baut tanam angkur beton merk LHC original. Dilengkapi selongsong baja ekspansi bergerigi yang mengembang kuat saat mur dikencangkan.',
                'highlights' => [
                    'Baja padat mutu tinggi tahan tarikan beban berat',
                    'Daya cengkeram maksimal pada cor semen & dinding bata',
                    'Ideal untuk dudukan tiang kanopi, pagar besi, dan bracket'
                ],
                'theme' => 'yellow',
                'badge_color' => 'bg-amber-600 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya ingin konsultasi ukuran dan tanya harga Dynabolt LHC untuk beton. Mohon info pricelist dan stoknya.',
            ],
            [
                'id' => 5,
                'category' => 'insulation',
                'name' => 'Aluminium Foil Atap (Single & Double Sided)',
                'brand' => 'Insulation Grade Woven',
                'brand_tag' => 'PREMIUM WOVEN',
                'head_style' => 'Roll Lembaran Anyaman Serat Woven Kuat',
                'sizes' => 'Lebar 1.2 Meter x Panjang 50 Meter / Roll',
                'packing' => 'Roll Tersegel Pabrik & Eceran Meteran',
                'description' => 'Lapisan penolak radiasi sinar infra merah matahari untuk dipasang di bawah genteng / atap spandek. Meredam kenaikan suhu ruangan secara signifikan.',
                'highlights' => [
                    'Memantulkan radiasi panas matahari hingga 95%',
                    'Struktur diperkuat anyaman woven, kuat ditarik tidak robek',
                    'Tersedia tipe Single Sided (hemat) & Double Sided (maksimal)'
                ],
                'theme' => 'silver',
                'badge_color' => 'bg-slate-700 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya butuh Aluminium Foil untuk peredam panas atap (Single / Double Sided). Apakah ada stok roll dan berapa harga per rollnya?',
            ],
            [
                'id' => 6,
                'category' => 'insulation',
                'name' => 'Bubble Foil Insulation (Peredam Panas & Suara)',
                'brand' => 'Thermal Air Barrier',
                'brand_tag' => 'DOUBLE IMPACT',
                'head_style' => 'Double Metalize Layer + Dense Air Cushion Bubble',
                'sizes' => 'Tebal 4mm & 8mm (Lebar 1.2m x Roll)',
                'packing' => 'Kemasan Roll Utuh & Meteran',
                'description' => 'Solusi ganda penolak panas sekaligus peredam suara berisik air hujan pada atap seng / spandek kanopi dengan bantalan gelembung udara rapat.',
                'highlights' => [
                    'Meredam suara bising tetesan air hujan secara dramatis',
                    'Memblokir rambatan panas konduksi dan radiasi sinar UV',
                    'Tampilan rapi dan bersih untuk plafon terbuka/ekspos'
                ],
                'theme' => 'cyan',
                'badge_color' => 'bg-teal-700 text-white',
                'wa_text' => 'Halo Admin Omah Baut Semarang, saya ingin tanya harga Bubble Foil peredam panas & suara hujan untuk atap kanopi spandek. Mohon info ketebalan dan harganya.',
            ],
        ];

        $advantages = [
            [
                'title' => 'Stok Lengkap & Konsisten',
                'desc' => 'Selalu ready stock partai besar (dus-dusan / roll utuh) untuk suplai proyek konstruksi maupun pembelian eceran tukang harian.',
                'icon' => 'box',
            ],
            [
                'title' => 'Merek Resmi & Berkualitas',
                'desc' => 'Hanya menjual produk terpercaya: NAGA BOLT, FUJI FASTENER\'S, dan LHC. Terbukti tajam, drat presisi, dan tidak mudah aus/patah.',
                'icon' => 'badge-check',
            ],
            [
                'title' => 'Harga Spesial Mitra Proyek',
                'desc' => 'Dapatkan penawaran harga bersaing langsung tangan pertama untuk aplikator baja ringan, bengkel las, toko bangunan, dan kontraktor.',
                'icon' => 'tag',
            ],
            [
                'title' => 'Lokasi Strategis & Ramah Layanan',
                'desc' => 'Berada di Jl. Tlogo Mukti Raya Pedurungan, mudah diakses kendaraan roda 2 maupun mobil pikap. Siap bantu kirim ke seluruh area Semarang.',
                'icon' => 'truck',
            ],
        ];

        return view('home', compact('store', 'brands', 'use_cases', 'categories', 'products', 'advantages'));
    }
}