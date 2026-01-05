<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Menampilkan halaman keranjang
    public function index() {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request) {
        \App\Models\Cart::updateOrCreate(
            [
                'user_id' => auth()->id(), 
                'product_id' => $request->product_id
            ],
            [
                'quantity' => \DB::raw('1') 
            ]
        );
        return back();
    }

    // Update jumlah di halaman keranjang (+ / -)
    public function update(Request $request, $id) {
        $cartItem = Cart::findOrFail($id);
        
        if ($request->change == -1 && $cartItem->quantity <= 1) {
            return back();
        }

        $cartItem->increment('quantity', $request->change);
        return back();
    }

    // Menghapus item
    public function remove($id) {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return back();
    }
}