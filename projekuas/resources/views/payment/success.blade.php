<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pembayaran Berhasil - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        @keyframes pop {
            0% { transform: scale(0); opacity: 0; }
            70% { transform: scale(1.15); }
            100% { transform: scale(1); opacity: 1; }
        }
        .pop { animation: pop 0.5s ease forwards; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 max-w-md w-full text-center">

        {{-- Icon Sukses --}}
        <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-4 pop">
            <span class="material-symbols-outlined text-green-500 text-5xl">check_circle</span>
        </div>

        <h1 class="text-2xl font-bold text-slate-800 mb-1">Pemesanan Diterima!</h1>

        @if($booking->metode_pembayaran === 'transfer_manual')
            <p class="text-slate-500 text-sm mb-6">Bukti transfer kamu sudah kami terima. Tim kami akan memverifikasi dalam <span class="font-bold text-[#0A3A60]">1x24 jam</span>.</p>
        @else
            <p class="text-slate-500 text-sm mb-6">Pembayaran kamu sudah berhasil diproses. Selamat menikmati perjalanan!</p>
        @endif

        {{-- Detail Booking --}}
        <div class="bg-slate-50 rounded-xl p-4 mb-6 text-left flex flex-col gap-3">
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Detail Pemesanan</p>

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">ID Booking</span>
                <span class="font-bold text-[#0A3A60]">#{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Nama</span>
                <span class="font-semibold text-slate-700">{{ $booking->nama_lengkap }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Mobil</span>
                <span class="font-semibold text-slate-700">{{ $booking->post->brand?->name }} {{ $booking->post->name }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Tanggal Ambil</span>
                <span class="font-semibold text-slate-700">{{ \Carbon\Carbon::parse($booking->tanggal_ambil)->format('d M Y') }} {{ substr($booking->jam_ambil, 0, 5) }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Tanggal Kembali</span>
                <span class="font-semibold text-slate-700">{{ \Carbon\Carbon::parse($booking->tanggal_kembali)->format('d M Y') }} {{ substr($booking->jam_kembali, 0, 5) }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Durasi</span>
                <span class="font-semibold text-slate-700">{{ $booking->durasi_hari }} Hari</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Metode Bayar</span>
                <span class="font-semibold text-slate-700">{{ $booking->metode_pembayaran === 'midtrans' ? 'Midtrans' : 'Transfer Manual' }}</span>
            </div>
            <div class="flex justify-between text-sm border-t border-slate-200 pt-2 mt-1">
                <span class="font-bold text-slate-700">Total</span>
                <span class="font-bold text-[#0A3A60]">Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        {{-- Status Badge --}}
        @if($booking->status_pembayaran === 'paid')
            <div class="bg-green-50 border border-green-200 rounded-xl py-3 px-4 mb-6 flex items-center gap-2 justify-center">
                <span class="material-symbols-outlined text-green-500 text-xl">verified</span>
                <span class="text-green-700 font-bold text-sm">Pembayaran Terverifikasi</span>
            </div>
        @else
            <div class="bg-yellow-50 border border-yellow-200 rounded-xl py-3 px-4 mb-6 flex items-center gap-2 justify-center">
                <span class="material-symbols-outlined text-yellow-500 text-xl">hourglass_top</span>
                <span class="text-yellow-700 font-bold text-sm">Menunggu Verifikasi Admin</span>
            </div>
        @endif

        <a href="/" class="w-full bg-[#0A3A60] hover:bg-opacity-90 text-white py-4 rounded-xl font-bold transition-all flex items-center justify-center gap-2">
            <span class="material-symbols-outlined">home</span>
            Kembali ke Beranda
        </a>

        <a href="/booking" class="mt-3 inline-block text-sm text-slate-400 hover:text-slate-600 transition-colors">
            Buat pemesanan baru
        </a>
    </div>

</body>
</html>