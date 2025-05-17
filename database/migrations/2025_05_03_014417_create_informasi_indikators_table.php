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
            // $table->year('tahun')->constrained('evaluasi_tahuns', 'tahun')->onDelete('cascade');
            
            $table->year('tahun');
            $table->foreign('tahun')
                ->references('tahun')
                ->on('evaluasi_tahuns')
                ->cascadeOnDelete();
            
            $table->foreignId('indikator_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->unique(['indikator_id', 'tahun']); 
            $table->integer('jumlah_dokumen')->default(0); 
            $table->boolean('is_updated') ->default(false);
            $table->unique(['indikator_id', 'tahun', 'user_id']);
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
