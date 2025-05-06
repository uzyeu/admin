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
        Schema::table('informasi_indikators', function (Blueprint $table) {
            // $table->unsignedBigInteger('admin_dinas_id')->after('updated_at'); // Tambah kolom FK
            $table->foreign('admin_dinas_id')
                  ->references('id')
                  ->on('admin_dinas')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('informasi_indikators', function (Blueprint $table) {
            // $table->dropForeign(['admin_dinas_id']);
            $table->dropColumn('admin_dinas_id');
        });
    }
};
