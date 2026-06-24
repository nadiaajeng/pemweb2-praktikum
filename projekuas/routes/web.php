<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Armada;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;

// ROUTE HALAMAN UTAMA (WELCOME) + FILTER PENCARIAN (AMAN TANPA ERROR LOKASI)
Route::get('/', function (Request $request) {
    $query = Post::with(['brand', 'features']);

    // Filter Berdasarkan Tipe Mobil (MPV/SUV/Sedan) jika dipilih oleh user
    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

    // CATATAN: Filter lokasi dihapus karena kolom 'location' tidak ada di tabel posts Anda

    $cars = $query->get();
    
    return view('welcome', compact('cars')); 
});

// ROUTE HALAMAN ARMADA + SINKRONISASI FILTER PENCARIAN
Route::get('/armada', function (Request $request) {
    $query = Post::with(['brand', 'features']);

    // Ikut menyaring berdasarkan tipe mobil jika diakses lewat form pencarian
    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

    $armadas = $query->get();

    return view('armada', compact('armadas'));
});

Route::get('/fitur', function () {
    return view('fitur');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/booking', [BookingController::class, 'index']);
Route::post('/booking/store', [PaymentController::class, 'store'])->name('booking.store');
Route::get('/payment/simulate/{id}', [PaymentController::class, 'simulate'])->name('payment.simulate');
Route::post('/payment/simulate/{id}/process', [PaymentController::class, 'processSimulate'])->name('payment.process');
Route::get('/payment/transfer/{id}', [PaymentController::class, 'transferForm'])->name('payment.transfer');
Route::post('/payment/transfer/{id}/upload', [PaymentController::class, 'uploadBukti'])->name('payment.upload');
Route::get('/payment/success/{id}', [PaymentController::class, 'success'])->name('payment.success');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', function (Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'email.unique' => 'Email ini sudah terdaftar!',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok!',
            'password.min' => 'Kata sandi minimal harus 8 karakter!'
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', 
        ]);

        Auth::login($user);

        return redirect('/');
    });
});


Route::get('/admin/dashboard', function () {
    return redirect('/admin');
})->middleware('auth');