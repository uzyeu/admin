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
        Schema::create('informasi_aspeks', function (Blueprint $table) {
            $table->id();
            $table->float('indeks')->nullable(); // Diisi manual oleh admin pusat
            // $table->year('tahun')->constrained('evaluasi_tahuns', 'tahun');
            $table->year('tahun');
                        $table->foreign('tahun')
                            ->references('tahun')
                            ->on('evaluasi_tahuns')
                            ->cascadeOnDelete();
            $table->foreignId('aspek_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_aspeks');
    }
};
