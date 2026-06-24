<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        // Nampilin halaman login
        public function showLoginForm()
        {
            return view('login');
        }

        public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // JIKA USER ADALAH ADMIN, LANGSUNG TARIK KE PANEL FILAMENT
        if (Auth::user()->role === 'admin') {
            return redirect()->intended('/admin'); // <--- INI DIUBAH KE /admin YA BOS!
        }

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
}

        // Logout
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    }