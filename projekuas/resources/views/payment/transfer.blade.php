<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Transfer Manual - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>body { font-family: 'Montserrat', sans-serif; }</style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 max-w-md w-full">

        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined text-[#0A3A60] text-4xl">account_balance</span>
            </div>
            <h1 class="text-2xl font-bold text-[#0A3A60] mb-1">Transfer Manual</h1>
            <p class="text-slate-500 text-sm">Transfer ke rekening berikut lalu upload bukti transfer</p>
        </div>

        {{-- Info Rekening --}}
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 mb-6 flex flex-col gap-3">
            <p class="text-xs font-bold text-[#0A3A60] uppercase tracking-wider">Informasi Rekening</p>
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-xs text-slate-500">Bank BCA</p>
                    <p class="font-bold text-slate-800 text-lg tracking-wider">1234567890</p>
                    <p class="text-sm text-slate-600">a.n. DriveEase Indonesia</p>
                </div>
                <button onclick="copyRekening()" class="text-[#0A3A60] border border-[#0A3A60] px-3 py-1 rounded-lg text-xs font-bold hover:bg-[#0A3A60] hover:text-white transition-all">
                    Salin
                </button>
            </div>
        </div>

        {{-- Ringkasan --}}
        <div class="bg-slate-50 rounded-xl p-4 mb-6 flex flex-col gap-2">
            <p class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Ringkasan Pesanan</p>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Mobil</span>
                <span class="font-semibold text-slate-700">{{ $booking->post->brand?->name }} {{ $booking->post->name }}</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Durasi</span>
                <span class="font-semibold text-slate-700">{{ $booking->durasi_hari }} Hari</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-slate-500">Tanggal Ambil</span>
                <span class="font-semibold text-slate-700">{{ \Carbon\Carbon::parse($booking->tanggal_ambil)->format('d M Y') }}</span>
            </div>
            <div class="flex justify-between text-sm border-t border-slate-200 pt-2 mt-1">
                <span class="font-bold text-slate-700">Total Transfer</span>
                <span class="font-bold text-[#0A3A60] text-base">Rp{{ number_format($booking->total_harga, 0, ',', '.') }}</span>
            </div>
        </div>

        {{-- Upload Bukti Transfer --}}
        <form action="{{ route('payment.upload', $booking->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-2 mb-4">
                <label class="text-sm font-bold text-slate-700">Upload Bukti Transfer</label>
                <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 text-center cursor-pointer hover:border-[#0A3A60] transition-colors" onclick="document.getElementById('bukti').click()">
                    <span class="material-symbols-outlined text-slate-400 text-4xl mb-2 block">upload_file</span>
                    <p class="text-sm text-slate-500">Klik untuk pilih file</p>
                    <p class="text-xs text-slate-400 mt-1">JPG, PNG — maks. 2MB</p>
                    <p class="text-xs font-semibold text-[#0A3A60] mt-2" id="file_name">Belum ada file dipilih</p>
                </div>
                <input type="file" id="bukti" name="bukti_transfer" accept="image/*" class="hidden" onchange="showFileName(this)">
                @error('bukti_transfer')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-[#0A3A60] hover:bg-opacity-90 text-white py-4 rounded-xl font-bold transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">check_circle</span>
                Konfirmasi Pembayaran
            </button>
        </form>

        <a href="/booking" class="mt-4 inline-block text-sm text-slate-400 hover:text-slate-600 transition-colors text-center w-full">
            ← Kembali ke halaman booking
        </a>
    </div>

    <script>
        function copyRekening() {
            navigator.clipboard.writeText('1234567890');
            alert('Nomor rekening berhasil disalin!');
        }

        function showFileName(input) {
            const fileName = input.files[0]?.name || 'Belum ada file dipilih';
            document.getElementById('file_name').textContent = fileName;
        }
    </script>

</body>
</html>