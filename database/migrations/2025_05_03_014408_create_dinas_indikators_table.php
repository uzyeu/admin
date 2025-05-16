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
        Schema::create('dinas_indikators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->foreignId('admin_dinas_id')->constrained('admin_dinas')->cascadeOnDelete();
            // $table->foreign(columns: 'urutan_indikator')->references('urutan_indikator')->on('indikators')->onDelete('cascade');
            $table->foreignId('indikator_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dinas_indikators');
    }
};
