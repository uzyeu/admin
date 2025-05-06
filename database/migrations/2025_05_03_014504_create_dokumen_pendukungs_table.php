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
        Schema::create('dokumen_pendukungs', function (Blueprint $table) {
            $table->id(); // Tambahkan ID sebagai primary key
            $table->string('file')->nullable(); // Kolom untuk nama/path file
            $table->foreignId('admin_dinas_id')->constrained()->cascadeOnDelete(); // Relasi ke admin_dinas
            $table->unsignedBigInteger('urutan_indikator');
         
            $table->foreign('urutan_indikator')->references('urutan_indikator')->on('indikators')->onDelete('cascade');
     
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_pendukungs');
    }
};
