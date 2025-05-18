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
        Schema::create('indikators', function (Blueprint $table) {
            // $table->unsignedBigInteger('urutan_indikator')->primary();
            $table->id(); // Gunakan id auto-increment sebagai primary key
            $table->unsignedInteger('urutan_indikator'); 
            $table->string('nama_indikator');
            $table->text('deskripsi')->nullable();
            $table->foreignId('aspek_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikators');
    }
};
