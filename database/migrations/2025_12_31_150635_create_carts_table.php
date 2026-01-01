<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint; // Pastikan baris ini ada
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Ubah 'Blade $table' menjadi 'Blueprint $table'
        Schema::create('carts', function (Blueprint $table) { 
            $table->id();
            // user_id akan menghubungkan ke tabel users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // product_id akan menghubungkan ke tabel products
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
};