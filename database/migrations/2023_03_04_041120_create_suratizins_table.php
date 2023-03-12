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
        Schema::create('suratizin', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan_surat');
            $table->date('tanggal');
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('alamat_siswa');
            $table->longtext('isi');
            $table->string('penulis_surat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratizin');
    }
};
