<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; // Pastikan kamu punya Model Product

class ProductController extends Controller
{
    public function searchAjax(Request $request)
    {
        $query = $request->get('query');

        if (!$query) {
            return response()->json([]);
        }

        // KITA PAKAI MODE AMAN:
        // Cuma cari di 'name' dan 'category'. 
        // Hapus pencarian 'description' karena bikin error 500 kalau kolomnya gak ada.
        $products = Products::where(function($q) use ($query) {
                        $q->where('name', 'like', "%{$query}%")
                          ->orWhere('category', 'like', "%{$query}%");
                    })
                    // HANYA ambil kolom yang pasti ada di database kamu
                    ->select('id', 'name', 'price', 'image') 
                    ->limit(5)
                    ->get();

        return response()->json($products);
    }
}