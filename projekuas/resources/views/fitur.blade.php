<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fitur Layanan - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { vertical-align: middle; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900 antialiased flex flex-col min-h-screen">

    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-[0_2px_15px_rgba(0,0,0,0.01)] w-full">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center w-full">
            
            <div class="flex items-center shrink-0">
                <a href="/" class="text-2xl font-extrabold text-[#0A3A60] tracking-tight">Drive<span class="text-[#1E5A8A]">Ease</span></a>
            </div>

            <div class="hidden md:flex items-center gap-8 text-sm font-semibold">
                <a href="/" class="pb-1.5 border-b-2 transition-all duration-200 {{ request()->is('/') ? 'text-[#0A3A60] border-[#0A3A60]' : 'text-slate-600 border-transparent hover:text-[#0A3A60]' }}">
                    Dashboard
                </a>
                <a href="/fitur" class="pb-1.5 border-b-2 transition-all duration-200 {{ request()->is('fitur') ? 'text-[#0A3A60] border-[#0A3A60]' : 'text-slate-600 border-transparent hover:text-[#0A3A60]' }}">
                    Fitur
                </a>
                <a href="/armada" class="pb-1.5 border-b-2 transition-all duration-200 {{ request()->is('armada') ? 'text-[#0A3A60] border-[#0A3A60]' : 'text-slate-600 border-transparent hover:text-[#0A3A60]' }}">
                    Armada
                </a>
                <a href="/tentang" class="pb-1.5 border-b-2 transition-all duration-200 {{ request()->is('tentang') ? 'text-[#0A3A60] border-[#0A3A60]' : 'text-slate-600 border-transparent hover:text-[#0A3A60]' }}">
                    Tentang
                </a>
                <a href="/kontak" class="pb-1.5 border-b-2 transition-all duration-200 {{ request()->is('kontak') ? 'text-[#0A3A60] border-[#0A3A60]' : 'text-slate-600 border-transparent hover:text-[#0A3A60]' }}">
                    Kontak
                </a>
            </div>

            <div class="flex items-center gap-4 shrink-0">
                @auth
                    @if(Auth::user()->email === 'admin@gmail.com' || Auth::user()->role === 'admin')
                        <a href="/admin" class="bg-slate-800 text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-slate-700 transition-all shadow-sm flex items-center gap-1.5 whitespace-nowrap">
                            Panel Admin ({{ Auth::user()->name }}) <span class="material-symbols-outlined text-[18px]">settings</span>
                        </a>
                    @endif
                @endauth

                <button onclick="window.location.href='/booking'" class="bg-[#0A3A60] text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition-all shadow-sm whitespace-nowrap">
                    Pesan Sekarang
                </button>
                
                @auth
                    <form action="/logout" method="POST" class="inline flex items-center">
                        @csrf
                        <button type="submit" class="w-10 h-10 rounded-full border border-red-200 flex items-center justify-center text-red-500 bg-red-50/50 cursor-pointer hover:bg-red-50 shadow-sm transition-all" title="Keluar Akun">
                            <span class="material-symbols-outlined pointer-events-none">logout</span>
                        </button>
                    </form>
                @else
                    <a href="/login" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 cursor-pointer hover:bg-slate-50 shadow-sm transition-all flex items-center" title="Masuk ke Akun">
                        <span class="material-symbols-outlined pointer-events-none">account_circle</span>
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        <section class="bg-gradient-to-b from-slate-50 to-blue-50/50 py-16 md:py-24 px-6 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-6">
                    Layanan Unggulan DriveEase
                </h1>
                <p class="text-slate-600 text-sm md:text-base max-w-xl mx-auto font-medium leading-relaxed">
                    Komitmen kami memberikan pengalaman sewa mobil terbaik, teraman, dan ternyaman untuk perjalanan Anda di seluruh Indonesia.
                </p>
            </div>
        </section>

        <section class="py-16 px-6 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">speed</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Pemesanan Mudah &amp; Cepat</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Pesan lewat aplikasi atau website dalam hitungan menit tanpa proses yang rumit.</p>
                </div>

                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">directions_car</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Pilihan Armada Terlengkap</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Dari mobil keluarga yang nyaman hingga luxury MPV premium untuk kebutuhan bisnis.</p>
                </div>

                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">person</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Lepas Kunci atau Supir</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Fleksibilitas penuh untuk kebutuhan perjalanan Anda, mandiri atau dengan bantuan profesional.</p>
                </div>

                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">shield_lock</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Asuransi &amp; Proteksi Penuh</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Perjalanan aman tanpa rasa khawatir dengan perlindungan komprehensif untuk setiap sewa.</p>
                </div>

                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">support_agent</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Dukungan Pelanggan 24/7</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Tim responsif kami siap membantu kapan pun Anda butuhkan, di mana pun Anda berada.</p>
                </div>

                <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-[0_4px_20px_rgba(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300 flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#0A3A60]">receipt_long</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Harga Transparan</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Tanpa biaya tersembunyi. Semua jelas di awal untuk ketenangan pikiran Anda.</p>
                </div>
            </div>
        </section>

        <section class="bg-slate-100/50 py-16 px-6 text-center">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex flex-col gap-6">
                <h2 class="text-2xl font-bold text-slate-900">Siap Memulai Perjalanan Anda?</h2>
                <p class="text-sm text-slate-600 max-w-md mx-auto leading-relaxed">Jelajahi armada kami yang luas dan temukan kendaraan yang sempurna untuk perjalanan Anda berikutnya bersama DriveEase.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/armada" class="px-6 py-3 rounded-lg bg-[#0A3A60] text-white text-sm font-bold hover:bg-opacity-90 transition-all shadow-sm text-center">Lihat Armada</a>
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