<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;

    protected $table = 'Krs';
    
    protected $fillable = [
        'kode_mahasiswa',
        'tahun_ajaran',
        'semester',
        'status',
        'total_sks'
    ];

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class, 'id', 'kode_mahasiswa');
    }

    public function mahasiswa(){
        return $this->hasMany(KrsDetail::class, 'krs_id', 'id');
    }
}