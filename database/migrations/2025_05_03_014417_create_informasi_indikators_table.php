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
        Schema::create('informasi_indikators', function (Blueprint $table) {
            $table->id();
            $table->float('indeks');

            $table->unsignedBigInteger('tahun');
            $table->foreign('tahun')->references('tahun')->on('evaluasi_tahuns')->onDelete('cascade');
        
            $table->unsignedBigInteger('urutan_indikator');
            // $table->foreignId('urutan_indikator')->constrained()->cascadeOnDelete();
            $table->foreign('urutan_indikator')->references('urutan_indikator')->on('indikators')->onDelete('cascade');
            $table->foreignId('admin_dinas_id')->constrained('admin_dinas')->cascadeOnDelete();

            // tambahan chatgpt ini nda paham pka
            $table->unique(['urutan_indikator', 'tahun']); 

            $table->integer('jumlah_dokumen')->default(0); 
            $table->boolean('is_updated')
                  ->default(false)
                //   ->after('jumlah_dokumen')
                  ->comment('Flag apakah admin sudah menyelesaikan update dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_indikators');
    }
};
