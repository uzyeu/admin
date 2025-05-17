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
            $table->string('nama_file');
            $table->string('file_path');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('jenis_dokumen')->nullable();
            $table->unsignedBigInteger('ukuran')->comment('Dalam bytes');
            // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('indikator_id')->constrained()->onDelete('cascade');
            // $table->year('tahun')->constrained('evaluasi_tahuns', 'tahun')->cascadeOnDelete();
            $table->year('tahun');
            $table->foreign('tahun')
                ->references('tahun')
                ->on('evaluasi_tahuns')
                ->cascadeOnDelete();
            $table->timestamps();
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
