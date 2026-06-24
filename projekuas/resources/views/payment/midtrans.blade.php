<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pembayaran - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>body { font-family: 'Montserrat', sans-serif; }</style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 max-w-md w-full text-center">
        <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="material-symbols-outlined text-[#0A3A60] text-4xl">payment</span>
        </div>

        <h1 class="text-2xl font-bold text-[#0A3A60] mb-2">Selesaikan Pembayaran</h1>
        <p class="text-slate-500 text-sm mb-6">Klik tombol di bawah untuk melanjutkan pembayaran via Midtrans</p>

        <div class="bg-slate-50 rounded-xl p-4 mb-6 text-left flex flex-col gap-2">
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Mobil</span>
                <span class="font-semibold text-slate-700">{{ $booking->post->brand?->name }} {{ $booking->post->name }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Durasi</span>
                <span class="font-semibold text-slate-700">{{ $booking->durasi_hari }} Hari</span>
            </div>
            <div class="flex justify-between text-sm border-t border-slate-200 pt-2 mt-1">
                <span class="text-slate-500 font-bold">Total</span>
                <span class="font-bold text-[#0A3A60]">Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        <button id="pay-button" class="w-full bg-[#0A3A60] hover:bg-opacity-90 text-white py-4 rounded-xl font-bold transition-all flex items-center justify-center gap-2 shadow-sm">
            <span class="material-symbols-outlined">credit_card</span>
            Bayar Sekarang
        </button>

        <a href="/booking" class="mt-4 inline-block text-sm text-slate-400 hover:text-slate-600 transition-colors">
            ← Kembali ke halaman booking
        </a>
    </div>

    {{-- Midtrans Snap JS --}}
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script>
        document.getElementById('pay-button').addEventListener('click', function () {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    window.location.href = '/payment/success/{{ $booking->id }}';
                },
                onPending: function(result) {
                    alert('Pembayaran pending, silakan selesaikan pembayaran Anda.');
                },
                onError: function(result) {
                    alert('Pembayaran gagal, silakan coba lagi.');
                },
                onClose: function() {
                    alert('Anda menutup popup pembayaran sebelum menyelesaikan transaksi.');
                }
            });
        });
    </script>

</body>
</html>