@php use Illuminate\Support\Facades\Storage; @endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveEase - Rental Mobil Aman & Nyaman</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0A3A60', 
                        'primary-container': '#E1F0FF',
                        'on-primary': '#FFFFFF',
                        'surface-container-lowest': '#FFFFFF',
                        'surface-container-low': '#F4F7FA',
                        'surface-container': '#EDF1F5',
                        'surface-container-high': '#E2E8F0',
                        'on-surface': '#1A202C',
                        'on-surface-variant': '#64748B',
                        'secondary': '#475569',
                    },
                    spacing: {
                        'xs': '4px',
                        'sm': '8px',
                        'md': '16px',
                        'xl': '32px',
                        'lg': '24px',
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] font-sans antialiased min-h-screen">

    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-[0_2px_15px_rgba(0,0,0,0.01)]">
        <div class="max-w-7xl mx-auto px-lg h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <a href="/" class="text-2xl font-extrabold text-[#0A3A60] tracking-tight">Drive<span class="text-[#1E5A8A]">Ease</span></a>
            </div>

            <div class="hidden md:flex items-center gap-xl text-sm font-semibold text-slate-600">
                <a href="/" class="text-[#0A3A60] border-b-2 border-[#0A3A60] pb-1">Dashboard</a>
                <a href="/fitur" class="hover:text-[#0A3A60] transition-colors">Fitur</a>
                <a href="/armada" class="hover:text-[#0A3A60] transition-colors">Armada</a>
                <a class="text-secondary hover:text-primary transition-colors duration-200" href="/tentang">Tentang</a>
                <a class="{{ request()->is('kontak') ? 'text-[#0A3A60] font-bold border-b-2 border-[#0A3A60] pb-2' : 'text-slate-600 hover:text-[#0A3A60]' }} transition-all duration-200" href="/kontak">Kontak</a>
            </div>

            <div class="flex items-center gap-md">
                @auth
                    @if(Auth::user()->role === 'admin')
                        <a href="/admin" class="bg-slate-800 text-white px-4 py-2.5 rounded-lg text-sm font-bold hover:bg-slate-700 transition-all shadow-sm flex items-center gap-1">
                            Panel Admin <span class="material-symbols-outlined text-[18px]">settings</span>
                        </a>
                    @endif
                @endauth

                <button onclick="window.location.href='/booking'" class="bg-[#0A3A60] text-white px-lg py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition-all shadow-sm">
                    Pesan Sekarang
                </button>
                
                @auth
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="w-10 h-10 rounded-full border border-red-200 flex items-center justify-center text-red-500 bg-red-50/50 cursor-pointer hover:bg-red-50 relative z-50 shadow-sm transition-all" title="Keluar Akun ({{ Auth::user()->name }})">
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

    <header class="relative bg-slate-50 overflow-hidden border-b border-slate-100 min-h-[520px] flex items-center">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-left lg:bg-center opacity-90" 
                 style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1200&auto=format&fit=crop');">
                <div class="absolute inset-0 bg-gradient-to-r from-white/20 via-white/80 to-white"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto w-full px-lg py-12 grid grid-cols-1 lg:grid-cols-12 gap-xl items-center relative z-10">
            <div class="lg:col-span-7 flex flex-col gap-md bg-white/80 lg:bg-transparent p-md lg:p-0 rounded-2xl backdrop-blur-md lg:backdrop-blur-none shadow-sm lg:shadow-none">
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-[1.15] tracking-tight">
                    Sewa Mobil Aman & <br class="hidden md:block"> Nyaman Untuk Keluarga
                </h1>
                <p class="text-slate-600 text-sm md:text-md max-w-xl font-medium leading-relaxed">
                    Pilihan armada terbaik untuk perjalanan bisnis maupun liburan Anda di seluruh Indonesia. Terpercaya, bersih, dan siap jalan.
                </p>
            </div>

            <form action="/" method="GET" class="lg:col-span-5 bg-white rounded-2xl border border-slate-200 p-lg shadow-[0_15px_50px_rgba(0,0,0,0.05)] flex flex-col gap-md">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-xs">Lokasi Penjemputan</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-slate-400 text-md">location_on</span>
                        <input type="text" name="lokasi" value="{{ request('lokasi') }}" placeholder="Pilih Kota atau Bandara" class="w-full bg-white border border-slate-200 rounded-lg pl-10 pr-md py-2.5 text-sm focus:outline-none focus:border-[#0A3A60]">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-md">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-xs">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ request('tanggal') }}" class="w-full bg-white border border-slate-200 rounded-lg px-md py-2.5 text-sm focus:outline-none focus:border-[#0A3A60]">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-xs">Waktu</label>
                        <input type="time" name="waktu" value="{{ request('waktu') }}" class="w-full bg-white border border-slate-200 rounded-lg px-md py-2.5 text-sm focus:outline-none focus:border-[#0A3A60]">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-xs">Tipe Mobil</label>
                    <select name="type" class="w-full bg-white border border-slate-200 rounded-lg px-md py-2.5 text-sm focus:outline-none focus:border-[#0A3A60] cursor-pointer">
                        <option value="">Semua Tipe</option>
                        <option value="MPV" {{ request('type') == 'MPV' ? 'selected' : '' }}>MPV</option>
                        <option value="SUV" {{ request('type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Sedan" {{ request('type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-[#0A3A60] text-white py-3 rounded-lg text-sm font-bold hover:bg-opacity-90 transition-all mt-xs shadow-sm">
                    Cari Mobil
                </button>
            </form>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-lg py-20">
        <div class="text-center mb-xl">
            <h2 class="text-3xl font-bold text-on-surface tracking-tight">Armada Unggulan</h2>
            <p class="text-on-surface-variant mt-sm text-sm">Pilihan kendaraan berkualitas tinggi yang dirawat secara berkala untuk kenyamanan dan keamanan Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
            @forelse($cars as $car)
                <div class="bg-surface-container-lowest rounded-xl border border-surface-container-high overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.01)] flex flex-col hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300">
                    <div class="h-52 bg-surface-container-low relative flex items-center justify-center p-md">
                        <img alt="{{ $car->brand?->name }} {{ $car->name }}" 
                             class="w-full h-full object-contain mix-blend-multiply" 
                             src="{{ Storage::url($car->image) }}">
                        <div class="absolute top-sm right-sm bg-[#E1F0FF] text-[#0A3A60] px-sm py-xs rounded text-xs font-bold shadow-sm">
                            Populer
                        </div>
                    </div>
                    
                    <div class="p-lg flex flex-col flex-grow gap-md">
                        <div>
                            <h3 class="text-xl font-bold text-on-surface">{{ $car->brand?->name }} {{ $car->name }}</h3>
                            <p class="text-xs text-on-surface-variant mt-xs">{{ $car->type }} • {{ $car->passenger_capacity }} Penumpang</p>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-sm my-xs mb-auto">
                            <div class="flex items-center gap-xs bg-surface-container px-2 py-1 rounded text-xs text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">luggage</span> 
                                <span>{{ $car->luggage }}</span>
                            </div>
                            
                            @foreach($car->features as $feature)
                                <div class="flex items-center gap-xs bg-surface-container px-2 py-1 rounded text-xs text-on-surface-variant">
                                    @if(str_contains(strtolower($feature->name), 'ac'))
                                        <span class="material-symbols-outlined text-[16px]">mode_fan</span>
                                    @elseif(str_contains(strtolower($feature->name), 'gps'))
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                    @else
                                        <span class="material-symbols-outlined text-[16px]">done</span>
                                    @endif
                                    <span>{{ $feature->name }}</span>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="flex justify-between items-center border-t border-surface-container-high pt-md mt-xs">
                            <div>
                                <span class="block text-xs text-on-surface-variant">Mulai dari</span>
                                <span class="text-md text-primary font-bold text-lg">
                                    Rp {{ number_format($car->price_per_day, 0, ',', '.') }}<span class="text-xs text-on-surface-variant font-normal">/hari</span>
                                </span>
                            </div>
                            <button onclick="window.location.href='/booking'" class="bg-[#0A3A60] text-white px-md py-2 rounded-lg text-xs font-semibold hover:bg-opacity-90 transition-all shadow-sm">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-xl bg-white rounded-xl border border-dashed border-slate-300">
                    <span class="material-symbols-outlined text-4xl text-slate-300">directions_car</span>
                    <p class="text-on-surface-variant mt-sm text-sm">Tidak ada mobil yang cocok dengan kriteria pencarian Anda.</p>
                </div>
            @endforelse
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-lg mt-xl text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-lg flex flex-col md:flex-row justify-between items-center gap-md">
            <span class="text-md font-bold text-[#0A3A60]">DriveEase</span>
            <div class="flex gap-md">
                <a href="#" class="hover:underline">Kebijakan Privasi</a>
                <a href="#" class="hover:underline">Syarat & Ketentuan</a>
                <a href="#" class="hover:underline">Pusat Bantuan</a>
                <a href="#" class="hover:underline">Karir</a>
            </div>
            <p>© 2026 Kelompok 5. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>