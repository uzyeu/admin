<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDokumenPendukungToDokumenPendukungsTable extends Migration
{
    /**
     * Menambahkan kolom dokumen_pendukung ke tabel dokumen_pendukungs
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokumen_pendukungs', function (Blueprint $table) {
            // Menambahkan kolom dokumen_pendukung (tipe data string)
            $table->string('dokumen_pendukung')->nullable();
        });
    }

    /**
     * Membatalkan perubahan jika migrasi dibatalkan
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokumen_pendukungs', function (Blueprint $table) {
            // Menghapus kolom dokumen_pendukung
            $table->dropColumn('dokumen_pendukung');
        });
    }
}
