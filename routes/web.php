<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;

Route::get('/', function () {
    return view('home');
});

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
