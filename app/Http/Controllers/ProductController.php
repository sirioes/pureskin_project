<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    // Menampilkan hasil pencarian produk secara AJAX
    public function searchAjax(Request $request)
    {
        $query = $request->get('query');

        if (!$query) {
            return response()->json([]);
        }

        $products = Products::where(function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%")
                ->orWhere('category', 'like', "%{$query}%");
        })
            // HANYA ambil kolom yang pasti ada di database kamu
            ->select('id', 'name', 'price', 'image')
            ->limit(5)
            ->get();

        return response()->json($products);
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('show', compact('product'));
    }

    // Menampilkan modal dialogs untuk produk di halaman "Our Products"
    public function index()
    {
        // 1. Ambil data per kategori (Sesuaikan dengan query database Anda)
        $faceCare = Products::where('category', 'face-care')->get();
        $bodyCare = Products::where('category', 'body-care')->get();
        $bestSellers = Products::where('category', 'best-sellers')->get();
        $bestPackages = Products::where('category', 'best-packages')->get();

        // 2. Gabungkan semua untuk kebutuhan modal di satu tempat
        $semuaProdukModal = $faceCare->merge($bodyCare)
            ->merge($bestSellers)
            ->merge($bestPackages)
            ->unique('id'); // Menghindari modal ganda jika produk muncul di 2 kategori

        // 3. Kirim semua variabel ke view
        return view('ourproducts', compact(
            'faceCare',
            'bodyCare',
            'bestSellers',
            'bestPackages',
            'semuaProdukModal'
        ));
    }

    // Di ProductController.php
    public function indexHome() {
        $bestSellers = Products::where('category', 'best-sellers')->get();
        $bestPackages = Products::where('category', 'best-packages')->get();
        return view('home', compact('bestSellers', 'bestPackages'));
    }
}
