<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilai";

    protected $fillable = ['matkul_id','nilai','mahasiswa_id'];

    public function matkul(){
        return $this->hasOne(Matkul::class,'id','matkul_id');
    }

    public function mahasiswa(){
        return $this->hasOne(Mahasiswa::class,'id','mahasiswa_id');
    }
}
