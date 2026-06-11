<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrsDetail extends Model
{
    use HasFactory;

    protected $table = 'Krs_details';

    protected $fillable = [
        'kode_Krs',
        'kode_kelas',
        'status'
    ];

    public function kelas(){
        return $this->hasOne(Kelas::class, 'id', 'kode_kelas');
    }

    public function krs(){
        return $this->hasOne(KRS::class, 'id', 'id');
    }
}