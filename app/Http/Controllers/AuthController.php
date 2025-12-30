<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Fungsi Registrasi (Dengan Validasi & Redirect)
    public function register(Request $request) {
        // Validasi agar data tidak kosong atau email tidak kembar
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Setelah daftar, langsung arahkan ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    // 2. Fungsi Login (Dengan Session & Keamanan)
    public function login(Request $request) {
        // Validasi input login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Membuat session baru agar login aman
            $request->session()->regenerate();

            // Redirect ke halaman utama (home)
            return redirect()->route('home'); 
        }

        // Jika gagal, balik ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // 3. Fungsi Logout (Menghapus Session)
    public function logout(Request $request) {
        Auth::logout();
        
        // Menghapus data session agar user benar-benar keluar
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}