<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Products;

// 1. Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Halaman Login (Menampilkan form login)
Route::get('/login', function () {
    return view('login');
})->name('login'); // <--- Nama ini HARUS ADA agar redirect dari Controller bekerja

// 3. Halaman Register (Menampilkan form register)
Route::get('/register', function () {
    return view('register');
})->name('register');

// 4. Proses Data (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/ourproducts', function () {
    return view('ourproducts');
});

Route::get('/ourtreatments', function () {
    return view('ourtreatments');
});

Route::get('/ourproducts', function () {
    return view('ourproducts', [
        'faceCare'    => Products::where('category', 'face-care')->get(),
        'bodyCare'    => Products::where('category', 'body-care')->get(),
        'bestSellers'  => Products::where('category', 'best-sellers')->get(),
        'bestPackages' => Products::where('category', 'best-packages')->get(),
    ]);
});
