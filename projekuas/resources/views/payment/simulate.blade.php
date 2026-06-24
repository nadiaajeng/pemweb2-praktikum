<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Simulasi Pembayaran - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        @keyframes spin { to { transform: rotate(360deg); } }
        .spinner { animation: spin 1s linear infinite; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 max-w-md w-full">

        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                @if($booking->metode_pembayaran === 'kartu_kredit')
                    <span class="material-symbols-outlined text-[#0A3A60] text-4xl">credit_card</span>
                @elseif($booking->metode_pembayaran === 'transfer_bank')
                    <span class="material-symbols-outlined text-[#0A3A60] text-4xl">account_balance</span>
                @else
                    <span class="material-symbols-outlined text-[#0A3A60] text-4xl">qr_code_2</span>
                @endif
            </div>
            <h1 class="text-2xl font-bold text-[#0A3A60] mb-1">
                @if($booking->metode_pembayaran === 'kartu_kredit') Kartu Kredit
                @elseif($booking->metode_pembayaran === 'transfer_bank') Transfer Bank
                @else QRIS
                @endif
            </h1>
            <p class="text-slate-500 text-sm">Simulasi pembayaran DriveEase</p>
        </div>

        {{-- Ringkasan --}}
        <div class="bg-slate-50 rounded-xl p-4 mb-6 flex flex-col gap-2">
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">ID Booking</span>
                <span class="font-bold text-[#0A3A60]">#{{ str_pad($booking->id, 5, '0', STR_PAD_LEFT) }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Mobil</span>
                <span class="font-semibold text-slate-700">{{ $booking->post->brand?->name }} {{ $booking->post->name }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Durasi</span>
                <span class="font-semibold text-slate-700">{{ $booking->durasi_hari }} Hari</span>
            </div>
            <div class="flex justify-between text-sm border-t border-slate-200 pt-2 mt-1">
                <span class="font-bold text-slate-700">Total Bayar</span>
                <span class="font-bold text-[#0A3A60] text-base">Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        {{-- Konten simulasi per metode --}}
        @if($booking->metode_pembayaran === 'kartu_kredit')
        <div class="flex flex-col gap-3 mb-6">
            <div class="flex flex-col gap-1">
                <label class="text-xs font-bold text-slate-600">Nomor Kartu</label>
                <input type="text" value="4111 1111 1111 1111" class="border border-slate-200 rounded-lg px-3 py-2 text-sm font-mono bg-slate-50 text-slate-500" readonly>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold text-slate-600">Masa Berlaku</label>
                    <input type="text" value="12/28" class="border border-slate-200 rounded-lg px-3 py-2 text-sm font-mono bg-slate-50 text-slate-500" readonly>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold text-slate-600">CVV</label>
                    <input type="text" value="123" class="border border-slate-200 rounded-lg px-3 py-2 text-sm font-mono bg-slate-50 text-slate-500" readonly>
                </div>
            </div>
            <p class="text-xs text-slate-400 text-center">* Data kartu di atas hanya untuk simulasi</p>
        </div>

        @elseif($booking->metode_pembayaran === 'transfer_bank')
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6 flex flex-col gap-3">
            <p class="text-xs font-bold text-[#0A3A60] uppercase tracking-wider">Rekening Tujuan (Simulasi)</p>
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-xs text-slate-500">Bank BCA</p>
                    <p class="font-bold text-slate-800 text-lg tracking-wider">1234567890</p>
                    <p class="text-sm text-slate-600">a.n. DriveEase Indonesia</p>
                </div>
                <button onclick="navigator.clipboard.writeText('1234567890'); this.textContent='Tersalin!'" class="text-[#0A3A60] border border-[#0A3A60] px-3 py-1 rounded-lg text-xs font-bold hover:bg-[#0A3A60] hover:text-white transition-all">
                    Salin
                </button>
            </div>
            <div class="flex justify-between text-sm bg-white rounded-lg p-2">
                <span class="text-slate-500">Jumlah Transfer</span>
                <span class="font-bold text-[#0A3A60]">Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        @else
        {{-- QRIS --}}
        <div class="flex flex-col items-center mb-6">
            <div class="bg-white border-2 border-slate-200 rounded-xl p-4 mb-3">
                {{-- Simulasi QR Code --}}
                <svg width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                    <rect width="180" height="180" fill="white"/>
                    <rect x="10" y="10" width="60" height="60" fill="none" stroke="#0A3A60" stroke-width="6"/>
                    <rect x="22" y="22" width="36" height="36" fill="#0A3A60"/>
                    <rect x="110" y="10" width="60" height="60" fill="none" stroke="#0A3A60" stroke-width="6"/>
                    <rect x="122" y="22" width="36" height="36" fill="#0A3A60"/>
                    <rect x="10" y="110" width="60" height="60" fill="none" stroke="#0A3A60" stroke-width="6"/>
                    <rect x="22" y="122" width="36" height="36" fill="#0A3A60"/>
                    <rect x="85" y="10" width="10" height="10" fill="#0A3A60"/>
                    <rect x="75" y="20" width="10" height="10" fill="#0A3A60"/>
                    <rect x="85" y="30" width="10" height="10" fill="#0A3A60"/>
                    <rect x="75" y="40" width="10" height="10" fill="#0A3A60"/>
                    <rect x="85" y="50" width="10" height="10" fill="#0A3A60"/>
                    <rect x="75" y="60" width="10" height="10" fill="#0A3A60"/>
                    <rect x="110" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="130" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="150" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="110" y="100" width="10" height="10" fill="#0A3A60"/>
                    <rect x="120" y="110" width="10" height="10" fill="#0A3A60"/>
                    <rect x="140" y="100" width="10" height="10" fill="#0A3A60"/>
                    <rect x="160" y="110" width="10" height="10" fill="#0A3A60"/>
                    <rect x="110" y="130" width="10" height="10" fill="#0A3A60"/>
                    <rect x="130" y="140" width="10" height="10" fill="#0A3A60"/>
                    <rect x="150" y="130" width="10" height="10" fill="#0A3A60"/>
                    <rect x="10" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="30" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="50" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="70" y="80" width="10" height="10" fill="#0A3A60"/>
                    <rect x="20" y="90" width="10" height="10" fill="#0A3A60"/>
                    <rect x="40" y="90" width="10" height="10" fill="#0A3A60"/>
                    <rect x="60" y="95" width="10" height="10" fill="#0A3A60"/>
                </svg>
            </div>
            <p class="text-xs text-slate-400 text-center">Scan QR di atas menggunakan aplikasi e-wallet kamu</p>
            <p class="text-xs text-slate-400">(Simulasi — tidak perlu scan sungguhan)</p>
        </div>
        @endif

        {{-- Tombol Bayar --}}
<form action="{{ route('payment.process', $booking->id) }}" method="POST" id="pay-form">
    @csrf
    <button type="submit" id="pay-btn" class="w-full bg-[#0A3A60] hover:bg-opacity-90 text-white py-4 rounded-xl font-bold transition-all flex items-center justify-center gap-2 shadow-sm">
        <span class="material-symbols-outlined">check_circle</span>
        <span id="btn-text">Konfirmasi Pembayaran</span>
    </button>
</form>

<script>
    document.getElementById('pay-form').addEventListener('submit', function() {
        const btn = document.getElementById('pay-btn');
        const text = document.getElementById('btn-text');
        text.textContent = 'Memproses...';
        // jangan disabled, biarkan form submit dulu
    });
</script>

</body>
</html>