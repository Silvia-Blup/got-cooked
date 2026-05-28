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
        Schema::create('table_Kelas', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_Kelas');
            $unsignedBigInteger('kode_mata_kuliah')
            $unsignedBigInteger('kode_dosen')
            $enum('hari', ['senin', 'selasa', 'rabu', 'kamis', 'jumat'])
            $enum('jam', ['08:00 - 09:40', '09:50 - 11:30', '12:30 - 14:10', '17:00 - 18:40', '19:00 - 20:40'])
            $string('tahun_ajaran')
            $string('ruang_kelas')
            $integer('jumlah_max')
            $integer('jumlah_mahasiswa')->default(0)
            $enum('semester', ['ganjil', 'genap'])
            $timestamps()
            $unique(['kode_dosen', 'hari', 'jam', 'tahun_ajaran', 'semester'])
            $unique(['ruang_kelas', 'hari', 'jam', 'tahun_ajaran', 'semester']) 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_Kelas');
    }
};
