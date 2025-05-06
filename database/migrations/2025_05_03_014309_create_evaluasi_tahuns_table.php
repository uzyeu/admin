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
        Schema::create('evaluasi_tahuns', function (Blueprint $table) {
            $table->unsignedBigInteger('tahun')->primary();
            $table->boolean('indeks_akumulasi');
            $table->timestamps();
            // $table->foreignId('indikator_id')->constrained('indikators')->onDelete('cascade');
            // $table->primary(['tahun', 'indikator_id']); // Composite Primary Key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_tahuns');
    }
};
