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
        Schema::create('evaluasi_indikators', function (Blueprint $table) {
            $table->id();
            $table->integer('indeks');

            // $table->unsignedBigInteger('tahun');
            // $table->foreignId('tahun')->constrained()->cascadeOnDelete();

            $table->unsignedBigInteger('tahun_id');
            $table->foreign('tahun_id')->references('tahun')->on('evaluasi_tahuns')->onDelete('cascade');
        
            $table->unsignedBigInteger('urutan_indikator');
            // $table->foreignId('urutan_indikator')->constrained()->cascadeOnDelete();
            $table->foreign('urutan_indikator')->references('urutan_indikator')->on('indikators')->onDelete('cascade');
        
            $table->integer('jumlah_dokumen'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_indikators');
    }
};
