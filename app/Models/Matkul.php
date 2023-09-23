<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = "matkul";

    protected $fillable = ['nama_matkul','sks','dosen_id'];

    public function dosen(){
        return $this->hasOne(Dosen::class,'id');
    }
}
