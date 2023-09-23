<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\KRS;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TUController extends Controller
{
    public function index(){
        //mengambil jumlah data dosen
        $dosen = Dosen::all();
        $jumlahDosen = $dosen->count();

        //mengambil jumlah data mahasiswa
        $mahasiswa = Mahasiswa::all();
        $jumlahMahasiswa = $mahasiswa->count();
        

        //menampilkan view dari dashbaord
        return view('tu/dashboard',compact('jumlahDosen','jumlahMahasiswa'));
    }

    public function mahasiswa(){
        //mengambil semua data mahasiswa
        $mahasiswa = Mahasiswa::All();
        return view('tu/mahasiswa',compact('mahasiswa'));
    }

    public function tambah_mahasiswa(){
        //membuka form tambah mahasiswa
        return view('tu/tambah_mahasiswa');
    }

    public function aksi_tambah_mahasiswa(Request $request){
        try{

            //cek nim apakah sudah digunakan atau belum
            $cek = Mahasiswa::where('nim', '=' , $request->nim)->first();
            //jika nim belum ada
            if($cek == null){
                //menambah data baru mahasiswa
                $mahasiswa = new Mahasiswa;

                $mahasiswa->nim = $request->nim;
                $mahasiswa->nama = $request->nama;
                $mahasiswa->email = $request->email;
                $mahasiswa->no_hp = $request->no_hp;

                $mahasiswa->save();

                return redirect('tu/kelola_mahasiswa');
                
            }else{
                return redirect('tu/kelola_mahasiswa');
            }
            
        }catch(\Throwable $e){
            echo $e;
        }
    }

    public function update_mahasiswa($id){
        
        try{
            $mahasiswa = Mahasiswa::where('id',$id)->first();

            return view('tu/update_mahasiswa',compact('mahasiswa'));

        }catch(\Throwable $e){
            return $e->getMessage();
        }
        
        
    }

    public function aksi_update_mahasiswa(Request $request){
        try{
            $id = $request->id;
            $mahasiswa = Mahasiswa::findOrFail($id);
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama = $request->nama;
            $mahasiswa->email = $request->email;
            $mahasiswa->no_hp = $request->no_hp;
            $mahasiswa->save();
            return redirect("tu/kelola_mahasiswa");

        }catch(\Throwable $e){
            $e->getMessage();
        }
    }

    public function hapus_mahasiswa($id){
        try {
            $mahasiswa= Mahasiswa::where('id',$id);
            $mahasiswa->delete();
            
            // alihkan halaman ke halaman pegawai
            return redirect('tu/kelola_mahasiswa');
        }catch (\Throwable $e) {
            return redirect('tu/kelola_mahasiswa');
        }
    }

    public function dosen(){
        $dosen = Dosen::All();
        return view('tu/dosen',compact('dosen'));
    }

    public function tambah_dosen(){
        return view('tu/tambah_dosen');
    }

    public function aksi_tambah_dosen(Request $request){
        try{   
            $cek = Dosen::where('nid', '=' , $request->nid)->first();
            if($cek == null){
                $dosen = new Dosen;

                $dosen->nid = $request->nid;
                $dosen->nama = $request->nama;
                $dosen->email = $request->email;
                $dosen->no_hp = $request->no_hp;

                $dosen->save();

                return redirect('tu/kelola_dosen');
            }else{
                return redirect('tu/kelola_dosen');
            }
            
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }


    public function update_dosen($id){
        try{
            $dosen = Dosen::where('id',$id)->first();

            return view('tu/update_dosen',compact('dosen'));
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }

    public function aksi_update_dosen(Request $request){
        try{
            $id = $request->id;
            $dosen = Dosen::findOrFail($id);
            $dosen->nid = $request->nid;
            $dosen->nama = $request->nama;
            $dosen->email = $request->email;
            $dosen->no_hp = $request->no_hp;
            $dosen->save();
            return redirect("tu/kelola_dosen");

        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }

    public function hapus_dosen($id){
        try{
            $dosen= Dosen::where('id',$id);
            $dosen->delete();
            
            // alihkan halaman ke halaman pegawai
            return redirect('tu/kelola_dosen');
        }catch (\Throwable $e) {
            return redirect('tu/kelola_dosen');
        }
    }

    public function matkul(){
        $matkul = Matkul::with('dosen')->get();
        $dosen = Dosen::All();
        
        return view('tu/matkul',compact('dosen','matkul'));
        
    }


    public function tambah_matkul(){
        $dosen = Dosen::all();
        return view('tu/tambah_matkul',compact('dosen'));
    }


    public function aksi_tambah_matkul(Request $request){
        $matkul = new Matkul;

        $matkul->nama_matkul = $request->nama_matkul;
        $matkul->sks = $request->sks;
        $matkul->dosen_id = $request->dosen_id;
        $matkul->save();

        return redirect('tu/kelola_matkul');

    }

    public function update_matkul($id){
        $matkul = Matkul::findOrFail($id);
        $dosen = Dosen::all();

        return view('tu/update_matkul',compact('matkul','dosen'));
    }

    public function aksi_update_matkul(Request $request){
        try{
            $id = $request->id;
            $matkul = Matkul::findOrFail($id);
            $matkul->nama_matkul = $request->nama_matkul;
            $matkul->sks = $request->sks;
            $matkul->dosen_id = $request->dosen_id;
            $matkul->save();

            return redirect("tu/kelola_matkul");
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }

    public function hapus_matkul($id){
        try{
            $matkul= Matkul::where('id',$id);
            $matkul->delete();
            
            // alihkan halaman ke halaman pegawai
            return redirect('tu/kelola_matkul');
        }catch (\Throwable $e) {
            return redirect('tu/kelola_matkul');
        }
    }



    public function nilai(){
        $nilai = Nilai::with('matkul')->with('mahasiswa')->get();
        
        return view('tu/nilai',compact('nilai'));
        
    }


    public function tambah_nilai(){
        $matkul = Matkul::all();
        $mahasiswa = Mahasiswa::All();
        return view('tu/tambah_nilai',compact('matkul','mahasiswa'));
    }


    public function aksi_tambah_nilai(Request $request){
        $nilai = new nilai;

        $nilai->nilai = $request->nilai;
        $nilai->matkul_id = $request->matkul_id;
        $nilai->mahasiswa_id = $request->mahasiswa_id;
        $nilai->save();

        return redirect('tu/kelola_nilai');

    }

    public function update_nilai($id){
        $nilai = nilai::findOrFail($id);
        $dosen = Dosen::all();

        return view('tu/update_nilai',compact('nilai','dosen'));
    }

    public function aksi_update_nilai(Request $request){
        try{
            $id = $request->id;
            $nilai = nilai::findOrFail($id);
            $nilai->nilai = $request->nilai;
            $nilai->save();

            return redirect("tu/kelola_nilai");
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }

    public function hapus_nilai($id){
        try{
            $nilai= nilai::where('id',$id);
            $nilai->delete();
            
            // alihkan halaman ke halaman pegawai
            return redirect('tu/kelola_nilai');
        }catch (\Throwable $e) {
            return redirect('tu/kelola_nilai');
        }
    }
}
