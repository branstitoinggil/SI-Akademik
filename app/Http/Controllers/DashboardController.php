<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\KRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //mengambil jumlah data dosen
        $dosen = Dosen::all();
        $jumlahDosen = $dosen->count();

        //mengambil jumlah data mahasiswa
        $mahasiswa = Mahasiswa::all();
        $jumlahMahasiswa = $mahasiswa->count();
        

        //menampilkan view dari dashbaord
        return view('dashboard',compact('jumlahDosen','jumlahMahasiswa'));
    }
}
