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
        Schema::create('izinkantor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kantor');
            $table->string('alamat_kantor');
            $table->date('tanggal');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('alamat_pemohon');
            $table->longtext('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izinkantor');
    }
};
