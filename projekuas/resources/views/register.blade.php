<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Akun - DriveEase</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#003b73",
                        "primary-container": "#00529c",
                        "on-primary": "#ffffff",
                        "secondary": "#505f76",
                        "background": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c2c6d3"
                    },
                    "spacing": {
                        "lg": "24px",
                        "md": "16px",
                        "xl": "32px",
                        "xs": "4px",
                        "sm": "8px",
                        "margin-mobile": "16px",
                        "margin-desktop": "64px"
                    },
                    "fontFamily": {
                        "body-md": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "label-md": ["Montserrat"]
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.05);
        }
        .bg-pattern {
            background-color: #f7f9fb;
            background-image: radial-gradient(#d0e1fb 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen flex flex-col bg-pattern">

    <header class="w-full bg-white border-b border-slate-100 shadow-[0_2px_15px_rgba(0,0,0,0.01)]">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-20">
            <a class="text-2xl font-extrabold text-[#0A3A60] tracking-tight" href="/">Drive<span>Ease</span></a>
            <div class="flex items-center">
                <a href="/login" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-slate-50 shadow-sm transition-all" title="Kembali ke Login">
                    <span class="material-symbols-outlined">arrow_back</span>
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center py-xl px-margin-mobile">
        <div class="w-full max-w-[480px]">
            <div class="glass-card rounded-xl p-lg md:p-xl">
                <div class="text-center mb-xl">
                    <h1 class="text-2xl font-bold text-[#0A3A60] mb-sm">Daftar Akun Baru</h1>
                    <p class="text-sm text-secondary">Lengkapi data Anda untuk membuat akun di DriveEase.</p>
                </div>

                <form action="/register" method="POST" class="space-y-md">
                    @csrf 

                    @if ($errors->any())
                        <div class="p-3 bg-red-100 text-red-600 rounded-lg text-xs font-semibold space-y-1">
                            @foreach ($errors->all() as $error)
                                <div>• {{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-xs" for="name">Nama Lengkap</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </span>
                            <input class="w-full pl-10 pr-3 py-2 border border-outline-variant rounded-lg bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" 
                                   id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap Anda" type="text" required autofocus>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-xs" for="email">Email</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </span>
                            <input class="w-full pl-10 pr-3 py-2 border border-outline-variant rounded-lg bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" 
                                   id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" type="email" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-xs" for="password">Kata Sandi</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </span>
                            <input class="w-full pl-10 pr-3 py-2 border border-outline-variant rounded-lg bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" 
                                   id="password" name="password" placeholder="Minimal 8 karakter" type="password" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-xs" for="password_confirmation">Konfirmasi Kata Sandi</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-secondary">
                                <span class="material-symbols-outlined text-[20px]">lock_reset</span>
                            </span>
                            <input class="w-full pl-10 pr-3 py-2 border border-outline-variant rounded-lg bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" 
                                   id="password_confirmation" name="password_confirmation" placeholder="Ulangi kata sandi" type="password" required>
                        </div>
                    </div>

                    <button class="w-full py-3 bg-[#0A3A60] text-white font-semibold rounded-lg hover:bg-opacity-95 transition-all active:scale-[0.98] duration-200 shadow-sm flex items-center justify-center gap-sm mt-4" type="submit">
                        Daftar Akun
                        <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                    </button>
                </form>

                <div class="mt-lg text-center">
                    <p class="text-sm text-secondary">
                        Sudah punya akun? 
                        <a class="font-semibold text-primary hover:underline ml-1" href="/login">Masuk Sekarang</a>
                    </p>
                </div>
            </div>
        </div>
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