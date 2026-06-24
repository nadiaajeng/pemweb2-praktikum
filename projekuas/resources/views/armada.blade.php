<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>DriveEase - Daftar Armada</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "background": "#f7f9fb",
                    "on-secondary": "#ffffff",
                    "tertiary-container": "#893b01",
                    "surface-bright": "#f7f9fb",
                    "surface-tint": "#1d5fa9",
                    "on-primary-container": "#a5c7ff",
                    "error": "#ba1a1a",
                    "outline": "#727782",
                    "tertiary-fixed": "#ffdbca",
                    "on-primary-fixed": "#001b3b",
                    "surface": "#f7f9fb",
                    "on-secondary-fixed-variant": "#38485d",
                    "primary": "#003b73",
                    "tertiary": "#652900",
                    "on-tertiary-container": "#ffb58e",
                    "on-error": "#ffffff",
                    "on-primary-fixed-variant": "#004788",
                    "on-surface": "#191c1e",
                    "secondary-fixed": "#d3e4fe",
                    "on-error-container": "#93000a",
                    "inverse-primary": "#a7c8ff",
                    "surface-variant": "#e0e3e5",
                    "tertiary-fixed-dim": "#ffb68f",
                    "on-tertiary": "#ffffff",
                    "on-secondary-fixed": "#0b1c30",
                    "inverse-on-surface": "#eff1f3",
                    "secondary-container": "#d0e1fb",
                    "on-background": "#191c1e",
                    "surface-container-lowest": "#ffffff",
                    "secondary": "#505f76",
                    "surface-container-low": "#f2f4f6",
                    "surface-container-high": "#e6e8ea",
                    "outline-variant": "#c2c6d3",
                    "on-surface-variant": "#424751",
                    "error-container": "#ffdad6",
                    "surface-dim": "#d8dadc",
                    "primary-fixed-dim": "#a7c8ff",
                    "on-tertiary-fixed-variant": "#773200",
                    "primary-container": "#00529c",
                    "secondary-fixed-dim": "#b7c8e1",
                    "surface-container-highest": "#e0e3e5",
                    "inverse-surface": "#2d3133",
                    "on-secondary-container": "#54647a",
                    "surface-container": "#eceef0",
                    "on-primary": "#ffffff",
                    "primary-fixed": "#d5e3ff",
                    "on-tertiary-fixed": "#331100"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "xl": "32px",
                    "base": "4px",
                    "xs": "4px",
                    "md": "16px",
                    "sm": "8px",
                    "margin-mobile": "16px",
                    "lg": "24px",
                    "margin-desktop": "64px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "label-md": ["Montserrat"],
                    "body-lg": ["Montserrat"],
                    "headline-lg-mobile": ["Montserrat"],
                    "label-sm": ["Montserrat"],
                    "headline-sm": ["Montserrat"],
                    "body-md": ["Montserrat"],
                    "headline-md": ["Montserrat"],
                    "headline-lg": ["Montserrat"]
            },
            "fontSize": {
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                    "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          }
        }
      }
    </script>
<style>
        body { font-family: 'Montserrat', sans-serif; }
</style>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

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

<main class="flex-grow w-full max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop py-xl md:py-[64px] flex flex-col gap-xl">
<header class="text-center max-w-3xl mx-auto mb-lg">
<h1 class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-primary mb-md tracking-tight">Pilihan Armada DriveEase</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Kami menyediakan armada lokal terbaik yang dirawat secara berkala untuk memastikan kenyamanan dan keamanan perjalanan Anda di setiap destinasi.</p>
</header>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
@forelse($armadas as $armada)
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.05)] border border-surface-container hover:shadow-[0_8px_30px_rgba(0,0,0,0.08)] transition-all duration-300 flex flex-col group">
<div class="relative h-64 bg-surface-container-low overflow-hidden flex items-center justify-center">
    @if($armada->image)
    <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" 
         src="{{ Str::startsWith($armada->image, 'http') ? $armada->image : asset(Str::startsWith($armada->image, 'storage/') ? str_replace('\\', '/', $armada->image) : 'storage/' . str_replace('\\', '/', $armada->image)) }}" 
         alt="{{ $armada->brand?->name }} {{ $armada->name }}">
    @else
        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AP1WRLvsrbnCdvOG429vTRo_E9r56h3TTas8SpMt8pzZ-QqhBlX73kqn_vUmw5CCsa-6QjWLTD4y2gq8yrUx3BKuQRbaURkRRL_Wr9Ci6GSLpEwJkaTvehOuh8u0bJDvuZ_hQ8aP4KcM72OFYJ2lkd7N12oP4NSEgH9WCpEGlHIxqxzF3bRPazPQC00tRxFpJyJMXCkv_YkrMAIp7lbZl4k2i_1Y4F761LFL8NtP2kaRqrsN7XFklZsWXofOgME" alt="Default Car">
    @endif
    <div class="absolute top-4 right-4 bg-primary-container text-on-primary-container font-label-sm text-label-sm px-3 py-1 rounded-full backdrop-blur-sm bg-opacity-90">
        {{ $armada->type ?? 'Populer' }}
    </div>
</div>
<div class="p-lg flex flex-col flex-grow">
<h3 class="font-headline-sm text-headline-sm text-primary mb-xs">
    {{ $armada->brand?->name }} {{ $armada->name }}
</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-xs">
    {{ $armada->type ?? 'MPV' }} • {{ $armada->passenger_capacity ?? '7' }} Penumpang
</p>

<div class="flex flex-wrap gap-xs mb-lg">
    @if($armada->features)
        @foreach($armada->features as $feature)
            <div class="flex items-center text-on-surface-variant font-label-sm text-label-sm bg-surface-container-low p-2 rounded-DEFAULT">
                {{ $feature->name }}
            </div>
        @endforeach
    @else
        <div class="flex items-center text-on-surface-variant font-label-sm text-label-sm bg-surface-container-low p-2 rounded-DEFAULT">
            AC
        </div>
        <div class="flex items-center text-on-surface-variant font-label-sm text-label-sm bg-surface-container-low p-2 rounded-DEFAULT">
            GPS
        </div>
        <div class="flex items-center text-on-surface-variant font-label-sm text-label-sm bg-surface-container-low p-2 rounded-DEFAULT">
            Audio Bluetooth
        </div>
    @endif
</div>

<div class="flex items-center justify-between mt-auto pt-md border-t border-surface-container">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Mulai dari</span>
<span class="font-headline-sm text-headline-sm text-primary font-bold">
    Rp {{ number_format($armada->price ?? $armada->price_per_day ?? 0, 0, ',', '.') }}<span class="font-body-md text-body-md text-on-surface-variant font-normal">/hari</span>
</span>
</div>
<button onclick="window.location.href='/booking'" class="bg-primary text-on-primary font-label-md text-label-md px-md py-sm rounded-lg hover:bg-primary-container transition-colors">
    Pesan Sekarang
</button>
</div>
</div>
</div>
@empty
<div class="col-span-full text-center py-12 text-on-surface-variant font-medium">
    <span class="material-symbols-outlined text-4xl mb-2 text-outline">directions_car</span>
    <p>Belum ada data dari admin yang masuk.</p>
</div>
@endforelse
</section>

<div class="mt-xl bg-secondary-fixed/50 border border-secondary-fixed-dim rounded-xl p-lg flex flex-col md:flex-row items-center gap-lg">
<div class="bg-surface rounded-full p-md shadow-sm">
<span class="material-symbols-outlined text-primary text-[32px]">verified_user</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-primary-fixed mb-xs">Semua Kendaraan Terlindungi Asuransi</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Nikmati perjalanan tanpa rasa khawatir. Harga sewa sudah termasuk asuransi all-risk standar untuk memberikan ketenangan pikiran selama Anda menggunakan layanan DriveEase.</p>
</div>
</div>
</main>

<footer class="bg-white border-t border-slate-100 py-6 text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="text-md font-bold text-[#0A3A60]">DriveEase</span>
            <div class="flex gap-6">
                <a href="#" class="hover:underline">Kebijakan Privasi</a>
                <a href="#" class="hover:underline">Syarat & Ketentuan</a>
                <a href="#" class="hover:underline">Pusat Bantuan</a>
                <a href="#" class="hover:underline">Karir</a>
            </div>
            <p>© 2026 Kelompok 5. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

<script>
function navigateToSection(event, sectionId) {
    event.preventDefault();
    sessionStorage.setItem('home_action', sectionId);
    window.location.href = '/';
}
</script>

</body>
</html>