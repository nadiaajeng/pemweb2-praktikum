<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard Admin - DriveEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-100 font-[Montserrat] antialiased">

    <div class="flex h-screen overflow-hidden">
        <div class="w-64 bg-[#003b73] text-white p-6 flex flex-col justify-between">
            <div>
                <h1 class="text-2xl font-bold mb-8">DriveEase Admin</h1>
                <nav class="space-y-4">
                    <a href="#" class="block py-2 px-4 bg-opacity-20 bg-white rounded-lg font-semibold">Dashboard</a>
                    <a href="#" class="block py-2 px-4 hover:bg-white hover:bg-opacity-10 rounded-lg transition-colors">Daftar Pesanan</a>
                    <a href="#" class="block py-2 px-4 hover:bg-white hover:bg-opacity-10 rounded-lg transition-colors">Kelola Armada</a>
                </nav>
            </div>
            
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-4 bg-red-600 hover:bg-red-700 rounded-lg font-semibold transition-colors">
                    Keluar Akun
                </button>
            </form>
        </div>

        <div class="flex-grow p-8 overflow-y-auto">
            <header class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-slate-800">Selamat Datang, Admin!</h2>
                <div class="bg-white px-4 py-2 rounded-lg shadow-sm font-semibold text-slate-600">
                    {{ Auth::user()->name ?? 'Administrator' }}
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <div class="text-sm font-semibold text-slate-500 mb-1">Total Penyewaan</div>
                    <div class="text-2xl font-bold text-[#003b73]">12 Pesanan</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <div class="text-sm font-semibold text-slate-500 mb-1">Armada Aktif</div>
                    <div class="text-2xl font-bold text-emerald-600">8 Mobil</div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <div class="text-sm font-semibold text-slate-500 mb-1">Pendapatan Bulan Ini</div>
                    <div class="text-2xl font-bold text-slate-800">Rp 5.400.000</div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>