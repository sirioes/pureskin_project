<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // WAJIB ADA
use App\Models\Cart;               // WAJIB ADA
use Illuminate\Support\Facades\Auth; // WAJIB ADA

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Membagikan variabel $cartCount ke SEMUA file .blade.php
        View::composer('*', function ($view) {
            $count = 0;
            if (Auth::check()) {
                // Kita hitung jumlah total quantity di tabel carts
                $count = Cart::where('user_id', Auth::id())->sum('quantity');
            }
            $view->with('cartCount', $count);
        });
    }
}
