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

            // $table->unsignedBigInteger('tahun');
            // $table->foreign('tahun')->references('tahun')->on('evaluasi_tahuns')->onDelete('cascade');
            $table->year('tahun')->constrained('evaluasi_tahuns', 'tahun')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->unsignedBigInteger('urutan_indikator');
            // $table->foreignId('urutan_indikator')->constrained()->cascadeOnDelete();
            // tambahan chatgpt ini nda paham pka
            $table->unique(['indikator_id', 'tahun']); 

            $table->integer('jumlah_dokumen')->default(0); 
            $table->boolean('is_updated') ->default(false);
                //   ->after('jumlah_dokumen')
                //   ->comment('Flag apakah admin sudah menyelesaikan update dokumen');
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
