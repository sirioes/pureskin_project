<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Models\Products;


// 1. Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Halaman Login (Menampilkan form login)
Route::get('/login', function () {
    return view('login');
})->name('login');

// 3. Halaman Register (Menampilkan form register)
Route::get('/register', function () {
    return view('register');
})->name('register');

// 4. Proses Data (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 5. Route untuk SEARCH (Pencarian Live)
Route::get('/search-products', [ProductController::class, 'searchAjax'])->name('products.search.ajax');

// 6. Route untuk DETAIL PRODUK (Halaman Baru)
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// 7. Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});

// 8. Halaman Our Products
Route::get('/ourproducts', function () {
    return view('ourproducts');
});

// 9. Halaman Our Treatments
Route::get('/ourtreatments', function () {
    return view('ourtreatments');
});

// 10. Route untuk keranjang belanja (Butuh autentikasi)
Route::middleware(['auth'])->group(function () {
    // Route untuk menampilkan halaman keranjang
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    // Route untuk menambah produk ke keranjang (Ini yang menyebabkan error tadi)
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

    // Route untuk update jumlah produk di halaman keranjang
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

    // Route untuk menghapus produk dari keranjang
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

// 11. Halaman Our Products dengan data dari controller
Route::get('/ourproducts', function () {
    return view('ourproducts', [
        'faceCare'    => Products::where('category', 'face-care')->get(),
        'bodyCare'    => Products::where('category', 'body-care')->get(),
        'bestSellers'  => Products::where('category', 'best-sellers')->get(),
        'bestPackages' => Products::where('category', 'best-packages')->get(),
    ]);
});

// 12. Halaman Our Products untuk menampilkan Modal Dialogs
Route::get('/ourproducts', [ProductController::class, 'index'])->name('products.index');


Route::get('/', [ProductController::class, 'indexHome'])->name('home');
