<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => "Jenie",
            'nim' => "3123121121",
            'no_hp' => "0822123121",
            'email' => "jenie@gmail.com",
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => "Dadang",
            'nim' => "3123121122",
            'no_hp' => "08221231123",
            'email' => "Dadang@gmail.com",
            
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => "Doni",
            'nim' => "3123121133",
            'no_hp' => "08221231133",
            'email' => "Doni@gmail.com",
            
        ]);
    }
}
