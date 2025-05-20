<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul berita (diambil otomatis)
            $table->string('slug')->unique()->nullable();
            $table->string('gambar')->nullable(); // Thumbnail URL (diambil otomatis)
            $table->text('isi_konten'); 
            $table->string('author'); // Deskripsi berita (diambil otomatis)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
