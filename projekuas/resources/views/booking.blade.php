<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pesan Sekarang - DriveEase</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-background": "#191c1e",
                        "primary-fixed": "#d5e3ff",
                        "on-primary-container": "#a5c7ff",
                        "surface": "#f7f9fb",
                        "surface-variant": "#e0e3e5",
                        "on-surface-variant": "#424751",
                        "outline-variant": "#c2c6d3",
                        "background": "#f7f9fb",
                        "primary": "#003b73",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "surface-container-highest": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "on-surface": "#191c1e"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
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
                    fontFamily: {
                        "body-lg": ["Montserrat"],
                        "label-md": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "label-sm": ["Montserrat"],
                        "headline-sm": ["Montserrat"],
                        "headline-lg": ["Montserrat"],
                        "body-md": ["Montserrat"]
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

<main class="flex-grow max-w-7xl mx-auto w-full px-gutter py-margin-desktop">
<form action="{{ route('booking.store') }}" method="POST" id="booking_form">
@csrf
    <div class="max-w-5xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-xl items-start">
            <div class="lg:col-span-2 flex flex-col gap-lg">

                {{-- INFORMASI PENYEWAAN --}}
                <div class="bg-surface-container-lowest p-xl rounded-xl border border-surface-container-highest shadow-sm">
                    <h2 class="text-xl font-bold text-primary mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined">directions_car</span> Informasi Penyewaan
                    </h2>
                    <div class="grid md:grid-cols-2 gap-md">
                        <div class="flex flex-col gap-xs md:col-span-2">
                            <label class="font-label-md text-label-md text-on-surface" for="car_select">Pilih Armada Mobil</label>
                            <select class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="car_select" name="post_id">
                                <option value="">-- Pilih Armada --</option>
                                @forelse($armadas as $armada)
                                    <option 
                                        value="{{ $armada->id }}"
                                        data-price="{{ $armada->price_per_day }}"
                                        data-name="{{ $armada->brand?->name }} {{ $armada->name }}">
                                        {{ $armada->brand?->name }} {{ $armada->name }} ({{ $armada->type }})
                                        — Rp{{ number_format($armada->price_per_day, 0, ',', '.') }}/hari
                                    </option>
                                @empty
                                    <option value="" disabled>Belum ada armada tersedia</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="pickup_date">Tanggal Ambil</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="pickup_date" name="tanggal_ambil" type="date">
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="pickup_time">Jam Ambil</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="pickup_time" name="jam_ambil" type="time">
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="return_date">Tanggal Kembali</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="return_date" name="tanggal_kembali" type="date">
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="return_time">Jam Kembali</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="return_time" name="jam_kembali" type="time">
                        </div>
                        <div class="flex flex-col gap-xs md:col-span-2">
                            <label class="font-label-md text-label-md text-on-surface" for="driver_service">Layanan Tambahan</label>
                            <select class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="driver_service" name="layanan_tambahan">
                                <option value="lepas_kunci" data-price="0">Lepas Kunci (Tanpa Sopir)</option>
                                <option value="sopir" data-price="200000">Termasuk Sopir Profesional (+Rp200.000 / hari)</option>
                                <option value="sopir_bbm" data-price="350000">Termasuk Sopir + BBM (+Rp350.000 / hari)</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- DATA DIRI --}}
                <div class="bg-surface-container-lowest p-xl rounded-xl border border-surface-container-highest shadow-sm">
                    <h2 class="text-xl font-bold text-primary mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined">person</span> Data Diri Penyewa
                    </h2>
                    <div class="grid md:grid-cols-2 gap-md">
                        <div class="flex flex-col gap-xs md:col-span-2">
                            <label class="font-label-md text-label-md text-on-surface" for="full_name">Nama Lengkap (Sesuai KTP)</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="full_name" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" type="text">
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="phone_number">Nomor WhatsApp</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="phone_number" name="no_whatsapp" placeholder="Contoh: 08123456789" type="tel">
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-md text-label-md text-on-surface" for="email_address">Alamat Email</label>
                            <input class="border border-outline-variant bg-surface rounded-lg focus:border-primary focus:ring-1 focus:ring-primary text-body-md font-body-md text-on-surface py-sm px-md transition-colors" id="email_address" name="email" placeholder="nama@email.com" type="email">
                        </div>
                    </div>
                </div>

                {{-- PILIH METODE PEMBAYARAN --}}
                <div class="bg-surface-container-lowest p-xl rounded-xl border border-surface-container-highest shadow-sm">
                    <h2 class="text-xl font-bold text-primary mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined">payment</span> Metode Pembayaran
                    </h2>
                    <div class="grid md:grid-cols-2 gap-md">

                        <label class="cursor-pointer">
                            <input type="radio" name="metode_pembayaran" value="kartu_kredit" class="sr-only peer" checked>
                            <div class="border-2 border-outline-variant peer-checked:border-primary peer-checked:bg-primary/5 rounded-xl p-md flex flex-col gap-xs transition-all">
                                <div class="flex items-center gap-sm">
                                    <span class="material-symbols-outlined text-primary">credit_card</span>
                                    <span class="font-bold text-on-surface">Kartu Kredit</span>
                                </div>
                                <p class="text-label-sm font-medium text-on-surface-variant">Visa, Mastercard, dll</p>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="metode_pembayaran" value="transfer_bank" class="sr-only peer">
                            <div class="border-2 border-outline-variant peer-checked:border-primary peer-checked:bg-primary/5 rounded-xl p-md flex flex-col gap-xs transition-all">
                                <div class="flex items-center gap-sm">
                                    <span class="material-symbols-outlined text-primary">account_balance</span>
                                    <span class="font-bold text-on-surface">Transfer Bank</span>
                                </div>
                                <p class="text-label-sm font-medium text-on-surface-variant">BCA, Mandiri, BNI, BRI</p>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="metode_pembayaran" value="qris" class="sr-only peer">
                            <div class="border-2 border-outline-variant peer-checked:border-primary peer-checked:bg-primary/5 rounded-xl p-md flex flex-col gap-xs transition-all">
                                <div class="flex items-center gap-sm">
                                    <span class="material-symbols-outlined text-primary">qr_code_2</span>
                                    <span class="font-bold text-on-surface">QRIS</span>
                                </div>
                                <p class="text-label-sm font-medium text-on-surface-variant">GoPay, OVO, Dana, dll</p>
                            </div>
                        </label>

                        <label class="cursor-pointer">
                            <input type="radio" name="metode_pembayaran" value="transfer_manual" class="sr-only peer">
                            <div class="border-2 border-outline-variant peer-checked:border-primary peer-checked:bg-primary/5 rounded-xl p-md flex flex-col gap-xs transition-all">
                                <div class="flex items-center gap-sm">
                                    <span class="material-symbols-outlined text-primary">upload_file</span>
                                    <span class="font-bold text-on-surface">Transfer Manual</span>
                                </div>
                                <p class="text-label-sm font-medium text-on-surface-variant">Transfer & upload bukti bayar</p>
                            </div>
                        </label>

                    </div>
                </div>
            </div>

            {{-- RINGKASAN PESANAN --}}
            <div class="bg-surface-container-lowest p-xl rounded-xl border border-surface-container-highest shadow-sm sticky top-24">
                <h2 class="text-lg font-bold text-on-surface mb-lg">Ringkasan Pesanan</h2>
                <div class="flex flex-col gap-md border-b border-surface-container-high pb-lg mb-lg">
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-semibold text-on-surface text-body-md" id="summary_car_name">Pilih armada dulu</h4>
                            <p class="text-label-sm font-medium text-on-surface-variant" id="summary_driver_label">—</p>
                        </div>
                        <span class="text-body-md font-bold text-primary" id="summary_price_per_day">
                            Rp0<span class="text-label-sm font-normal text-on-surface-variant">/hari</span>
                        </span>
                    </div>
                    <div class="bg-surface p-sm rounded-lg flex flex-col gap-xs text-label-sm font-medium text-on-surface-variant">
                        <div class="flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[16px] text-[#0A3A60]">event</span>
                            <span id="summary_duration">Durasi: 0 Hari</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-sm mb-lg">
                    <div class="flex justify-between text-body-md font-medium text-on-surface-variant">
                        <span>Subtotal</span>
                        <span id="summary_subtotal">Rp0</span>
                    </div>
                    <div class="flex justify-between text-body-md font-medium text-on-surface-variant">
                        <span>Biaya Layanan</span>
                        <span id="summary_service_fee">Rp0</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold text-[#0A3A60] border-t border-dashed border-surface-container-high pt-sm mt-xs">
                        <span>Total Bayar</span>
                        <span id="summary_total">Rp0</span>
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#0A3A60] hover:bg-opacity-95 text-white py-4 rounded-lg font-bold transition-all flex items-center justify-center gap-xs shadow-sm mb-sm">
                    Lanjutkan Pembayaran
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
                <p class="text-center text-label-sm font-medium text-on-surface-variant flex items-center justify-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">lock</span>
                    Pembayaran terenkripsi & aman
                </p>
            </div>
        </div>
    </div>
</form>
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

{{-- SCRIPT DYNAMIC RINGKASAN PESANAN --}}
<script>
    const carSelect      = document.getElementById('car_select');
    const pickupDate     = document.getElementById('pickup_date');
    const returnDate     = document.getElementById('return_date');
    const driverService  = document.getElementById('driver_service');

    const summaryCarName      = document.getElementById('summary_car_name');
    const summaryDriverLabel  = document.getElementById('summary_driver_label');
    const summaryPricePerDay  = document.getElementById('summary_price_per_day');
    const summaryDuration     = document.getElementById('summary_duration');
    const summarySubtotal     = document.getElementById('summary_subtotal');
    const summaryServiceFee   = document.getElementById('summary_service_fee');
    const summaryTotal        = document.getElementById('summary_total');

    function formatRupiah(amount) {
        return 'Rp' + Number(amount).toLocaleString('id-ID');
    }

    function updateSummary() {
        const selectedCar   = carSelect.options[carSelect.selectedIndex];
        const carPrice      = parseInt(selectedCar.dataset.price) || 0;
        const carName       = selectedCar.dataset.name || '';

        const selectedService = driverService.options[driverService.selectedIndex];
        const extraCost        = parseInt(selectedService.dataset.price) || 0;
        const driverLabel      = selectedService.text;

        // Hitung durasi hari
        let days = 0;
        if (pickupDate.value && returnDate.value) {
            const start = new Date(pickupDate.value);
            const end   = new Date(returnDate.value);
            const diff  = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
            if (diff > 0) days = diff;
        }

        const subtotal   = carPrice * days;
        const serviceFee = extraCost * days;
        const total       = subtotal + serviceFee;

        summaryCarName.textContent     = carName || 'Pilih armada dulu';
        summaryDriverLabel.textContent = carName ? driverLabel : '—';
        summaryPricePerDay.innerHTML    = carPrice > 0
            ? formatRupiah(carPrice) + '<span class="text-label-sm font-normal text-on-surface-variant">/hari</span>'
            : 'Rp0<span class="text-label-sm font-normal text-on-surface-variant">/hari</span>';
        summaryDuration.textContent    = 'Durasi: ' + days + ' Hari';
        summarySubtotal.textContent    = formatRupiah(subtotal);
        summaryServiceFee.textContent  = formatRupiah(serviceFee);
        summaryTotal.textContent       = formatRupiah(total);
    }

    carSelect.addEventListener('change', updateSummary);
    pickupDate.addEventListener('change', updateSummary);
    returnDate.addEventListener('change', updateSummary);
    driverService.addEventListener('change', updateSummary);
</script>

</body>
</html>