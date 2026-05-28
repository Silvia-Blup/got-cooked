<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='table_Kelas';

      protected $fillable = [
        'kode_kelas',
        'kode_mata_kuliah',
        'kode_dosen',
        'hari',
        'jam',
        'tahun_ajaran',
        'ruang_kelas',
        'jumlah_max',
        'jumlah_mahasiswa',
        'semester'
    ];
}

public function matakuliah(){
return $this->belongsTo(MataKuliah::classs, ‘kode_mata_kuliah’);

public function dosen(){
return $this->belongsTo(Dosen::classs, ‘kode_dosen’);
