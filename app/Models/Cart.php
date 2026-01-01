<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products; // <--- TAMBAHKAN BARIS INI

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}