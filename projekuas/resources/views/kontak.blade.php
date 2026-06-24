<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Hubungi Kami - DriveEase</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#93000a",
                        "tertiary-container": "#893b01",
                        "surface": "#f7f9fb",
                        "on-secondary-fixed-variant": "#38485d",
                        "surface-container-low": "#f2f4f6",
                        "surface-bright": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#54647a",
                        "on-surface": "#191c1e",
                        "surface-variant": "#e0e3e5",
                        "outline-variant": "#c2c6d3",
                        "on-tertiary-container": "#ffb58e",
                        "primary-fixed-dim": "#a7c8ff",
                        "on-surface-variant": "#424751",
                        "primary-fixed": "#d5e3ff",
                        "secondary-container": "#d0e1fb",
                        "on-primary-container": "#a5c7ff",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "error-container": "#ffdad6",
                        "secondary": "#505f76",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#004788",
                        "on-primary-fixed": "#001b3b",
                        "on-primary": "#ffffff",
                        "primary-container": "#00529c",
                        "inverse-primary": "#a7c8ff",
                        "tertiary-fixed-dim": "#ffb68f",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#ffdbca",
                        "on-tertiary-fixed-variant": "#773200",
                        "background": "#f7f9fb",
                        "primary": "#003b73",
                        "secondary-fixed": "#d3e4fe",
                        "surface-tint": "#1d5fa9",
                        "on-tertiary-fixed": "#331100",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-container-highest": "#e0e3e5",
                        "inverse-surface": "#2d3133",
                        "surface-container": "#eceef0",
                        "tertiary": "#652900",
                        "surface-dim": "#d8dadc"
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

<main class="flex-grow max-w-7xl mx-auto w-full px-gutter py-margin-desktop">
    <section class="grid md:grid-cols-2 gap-xl items-start">
        <div class="flex flex-col gap-lg">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-primary mb-sm font-bold">Hubungi Kami</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">Kami siap membantu kebutuhan perjalanan Anda 24/7. Hubungi kami melalui saluran berikut atau isi formulir di samping.</p>
            </div>
            
            <div class="flex flex-col gap-md">
                <div class="flex items-start gap-md p-md bg-surface border border-surface-container-highest rounded-xl">
                    <span class="material-symbols-outlined text-primary text-2xl mt-xs">call</span>
                    <div>
                        <h3 class="font-label-md text-label-md text-on-surface font-semibold">Telepon & WhatsApp</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">+62 812-3456-7890</p>
                    </div>
                </div>
                <div class="flex items-start gap-md p-md bg-surface border border-surface-container-highest rounded-xl">
                    <span class="material-symbols-outlined text-primary text-2xl mt-xs">mail</span>
                    <div>
                        <h3 class="font-label-md text-label-md text-on-surface font-semibold">Email Resmi</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">kelompok5@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-md p-md bg-surface border border-surface-container-highest rounded-xl">
                    <span class="material-symbols-outlined text-primary text-2xl mt-xs">location_on</span>
                    <div>
                        <h3 class="font-label-md text-label-md text-on-surface font-semibold">Kantor Pusat</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Jl. Raya Utama No. 45, Jakarta Selatan, Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="w-full h-64 bg-surface-container-highest rounded-xl overflow-hidden relative border border-surface-container-highest shadow-inner">
                <iframe src="https://maps.google.com/maps?q=Jakarta%20Selatan&t=&z=13&ie=UTF8&iwloc=&output=embed" class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-xl rounded-xl border border-surface-container-highest shadow-sm">
            <h2 class="font-headline-sm text-headline-sm text-on-surface mb-md font-semibold">Kirim Pesan</h2>
            
            <div id="alert-success" class="hidden mb-md flex items-center gap-sm p-md bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg text-sm transition-all duration-300 animate-fade-in">
                <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                <span>Pesan sudah terkirim! Tim kami akan segera menghubungi Anda.</span>
            </div>

            <form id="contactForm" class="flex flex-col gap-md">
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="name">Nama Lengkap</label>
                    <input required class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="name" name="name" placeholder="Masukkan nama lengkap Anda" type="text">
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="email">Alamat Email</label>
                    <input required class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="email" name="email" placeholder="nama@email.com" type="email">
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="subject">Subjek Pesan</label>
                    <input required class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="subject" name="subject" placeholder="Pilih atau tuliskan subjek keperluan" type="text">
                </div>
                <div class="flex flex-col gap-xs">
                    <label class="font-label-md text-label-md text-on-surface" for="message">Pesan Anda</label>
                    <textarea required class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors resize-y min-h-[120px]" id="message" name="message" placeholder="Tuliskan detail pesan Anda di sini..." rows="5"></textarea>
                </div>
                <button class="mt-xs bg-[#0A3A60] text-white rounded-lg py-md px-lg font-label-md text-label-md hover:bg-opacity-90 transition-all shadow-sm font-semibold" type="submit">
                    Kirim Pesan
                </button>
            </form>
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

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman standar form
        
        // Memunculkan kotak alert sukses
        const alertBox = document.getElementById('alert-success');
        alertBox.classList.remove('hidden');
        
        // Reset isi form setelah tombol diklik
        this.reset();
        
        // Menghilangkan alert otomatis setelah 5 detik
        setTimeout(() => {
            alertBox.classList.add('hidden');
        }, 5000);
    });
</script>

</body>
</html>