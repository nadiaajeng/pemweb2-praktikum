<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DriveEase - Tentang Kami</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-primary": "#a7c8ff",
                        "surface-container-highest": "#e0e3e5",
                        "surface-variant": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "tertiary-fixed": "#ffdbca",
                        "on-error-container": "#93000a",
                        "surface-tint": "#1d5fa9",
                        "tertiary-fixed-dim": "#ffb68f",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#d5e3ff",
                        "on-surface-variant": "#424751",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed-variant": "#38485d",
                        "primary-container": "#00529c",
                        "surface-container-low": "#f2f4f6",
                        "outline-variant": "#c2c6d3",
                        "inverse-on-surface": "#eff1f3",
                        "secondary": "#505f76",
                        "surface-bright": "#f7f9fb",
                        "tertiary": "#652900",
                        "primary-fixed-dim": "#a7c8ff",
                        "on-secondary-container": "#54647a",
                        "on-primary-container": "#a5c7ff",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#001b3b",
                        "on-tertiary-fixed": "#331100",
                        "on-background": "#191c1e",
                        "secondary-container": "#d0e1fb",
                        "on-tertiary-fixed-variant": "#773200",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#893b01",
                        "outline": "#727782",
                        "surface-container-high": "#e6e8ea",
                        "primary": "#003b73",
                        "on-tertiary-container": "#ffb58e",
                        "background": "#f7f9fb",
                        "secondary-fixed": "#d3e4fe",
                        "on-primary": "#ffffff",
                        "on-primary-fixed-variant": "#004788",
                        "surface": "#f7f9fb",
                        "on-secondary-fixed": "#0b1c30",
                        "secondary-fixed-dim": "#b7c8e1",
                        "error": "#ba1a1a",
                        "on-secondary": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-dim": "#d8dadc",
                        "inverse-surface": "#2d3133"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "md": "16px",
                        "lg": "24px",
                        "xl": "32px",
                        "xs": "4px",
                        "sm": "8px",
                        "base": "4px",
                        "gutter": "24px",
                        "margin-desktop": "64px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "body-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "label-md": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "label-sm": ["Montserrat"],
                        "headline-sm": ["Montserrat"],
                        "headline-lg": ["Montserrat"],
                        "body-md": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col antialiased">

<nav class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-[0_2px_15px_rgba(0,0,0,0.01)]">
    <div class="max-w-7xl mx-auto px-lg h-20 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <a href="/" class="text-2xl font-extrabold text-[#0A3A60] tracking-tight">Drive<span class="text-[#1E5A8A]">Ease</span></a>
        </div>

        <div class="hidden md:flex items-center gap-xl text-sm font-semibold">
            <a href="/" class="pb-1 transition-all duration-200 {{ request()->is('/') ? 'text-[#0A3A60] border-b-2 border-[#0A3A60]' : 'text-slate-600 hover:text-[#0A3A60]' }}">
                Dashboard
            </a>
            
            <a href="/fitur" class="pb-1 transition-all duration-200 {{ request()->is('fitur') ? 'text-[#0A3A60] border-b-2 border-[#0A3A60]' : 'text-slate-600 hover:text-[#0A3A60]' }}">
                Fitur
            </a>
            
            <a href="/armada" class="pb-1 transition-all duration-200 {{ request()->is('armada') ? 'text-[#0A3A60] border-b-2 border-[#0A3A60]' : 'text-slate-600 hover:text-[#0A3A60]' }}">
                Armada
            </a>
            
            <a href="/tentang" class="pb-1 transition-all duration-200 {{ request()->is('tentang') ? 'text-[#0A3A60] border-b-2 border-[#0A3A60]' : 'text-slate-600 hover:text-[#0A3A60]' }}">
                Tentang
            </a>
            
            <a href="/kontak" class="pb-1 transition-all duration-200 {{ request()->is('kontak') ? 'text-[#0A3A60] border-b-2 border-[#0A3A60]' : 'text-slate-600 hover:text-[#0A3A60]' }}">
                Kontak
            </a>
        </div>

        <div class="flex items-center gap-md">
            
            @auth
                @if(Auth::user()->email === 'admin@gmail.com' || Auth::user()->role === 'admin')
                    <a href="/admin" class="bg-slate-800 text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-slate-700 transition-all shadow-sm flex items-center gap-1.5">
                        Panel Admin ({{ Auth::user()->name }}) <span class="material-symbols-outlined text-[18px]">settings</span>
                    </a>
                @endif
            @endauth

            <button onclick="window.location.href='/booking'" class="bg-[#0A3A60] text-white px-lg py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition-all shadow-sm">
                Pesan Sekarang
            </button>
            
            @auth
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="w-10 h-10 rounded-full border border-red-200 flex items-center justify-center text-red-500 bg-red-50/50 cursor-pointer hover:bg-red-50 relative z-50 shadow-sm transition-all" title="Keluar Akun">
                        <span class="material-symbols-outlined pointer-events-none">logout</span>
                    </button>
                </form>
            @else
                <a href="/login" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 cursor-pointer hover:bg-slate-50 relative z-50 shadow-sm transition-all" title="Masuk ke Akun">
                    <span class="material-symbols-outlined pointer-events-none">account_circle</span>
                </a>
            @endauth
        </div>
    </div>
</nav>

<main class="flex-grow">
    <section class="relative w-full h-[50vh] md:h-[65vh] bg-background overflow-hidden flex items-center justify-center">
        <img alt="DriveEase Premium Fleet" class="w-full h-full object-cover object-center opacity-85" src="https://images.unsplash.com/photo-1617469767053-d3b523a0b982?q=80&w=1920&auto=format&fit=crop">
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-background/20"></div>
    </section>

    <section class="bg-surface-container-low py-margin-desktop px-gutter w-full">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="font-headline-md text-headline-md text-primary mb-md font-semibold">Misi Kami</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                Menyediakan kendaraan lokal yang andal, bersih, dan terawat dengan baik untuk keluarga dan bisnis. Kami berkomitmen untuk memberikan pengalaman mobilitas yang mulus, aman, dan nyaman, mendukung produktivitas dan kelancaran setiap perjalanan Anda dengan standar layanan bintang lima.
            </p>
        </div>
    </section>

    <section class="py-margin-desktop px-gutter max-w-7xl mx-auto w-full">
        <h2 class="font-headline-md text-headline-md text-center text-primary mb-xl font-semibold">Nilai Kami</h2>
        <div class="grid md:grid-cols-3 gap-lg">
            <div class="bg-surface p-xl rounded-xl border border-surface-container-highest hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-sm">
                <div class="w-16 h-16 bg-secondary-container rounded-xl flex items-center justify-center mb-md text-primary shadow-sm">
                    <span class="material-symbols-outlined text-3xl">shield</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Keamanan</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Prioritas utama kami adalah keselamatan Anda. Setiap armada melalui inspeksi ketat dan perawatan rutin untuk memastikan performa optimal di jalan.</p>
            </div>
            <div class="bg-surface p-xl rounded-xl border border-surface-container-highest hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-sm">
                <div class="w-16 h-16 bg-secondary-container rounded-xl flex items-center justify-center mb-md text-primary shadow-sm">
                    <span class="material-symbols-outlined text-3xl">chair_alt</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Kenyamanan</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Kami menghadirkan standar kebersihan premium. Interior wangi, kabin senyap, dan fitur lengkap untuk pengalaman berkendara yang rileks.</p>
            </div>
            <div class="bg-surface p-xl rounded-xl border border-surface-container-highest hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-sm">
                <div class="w-16 h-16 bg-secondary-container rounded-xl flex items-center justify-center mb-md text-primary shadow-sm">
                    <span class="material-symbols-outlined text-3xl">verified</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Profesionalisme</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Layanan pelanggan responsif, pengemudi terlatih, dan proses sewa yang transparan tanpa biaya tersembunyi. Kepercayaan Anda adalah aset kami.</p>
            </div>
        </div>
    </section>
</main>

<footer class="bg-white border-t border-slate-100 py-6 text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="text-md font-bold text-[#0A3A60]">DriveEase</span>
            <div class="flex gap-6">
                <a href="#" class="hover:underline">Kebijakan Privasi</a>
                <a href="#" class="hover:underline">Syarat &amp; Ketentuan</a>
                <a href="#" class="hover:underline">Pusat Bantuan</a>
                <a href="#" class="hover:underline">Karir</a>
            </div>
            <p>© 2026 Kelompok 5. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>