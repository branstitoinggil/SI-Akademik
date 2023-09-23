<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            'nama_matkul' => "Pemrograman Web",
            'sks' => 4,
            'dosen_id' => 1,
        ]);

        DB::table('matkul')->insert([
            'nama_matkul' => "Pemrograman Object",
            'sks' => 4,
            'dosen_id' => 2,
        ]);

        DB::table('matkul')->insert([
            'nama_matkul' => "Pemrograman Basis Data",
            'sks' => 4,
            'dosen_id' => 1,
        ]);

        DB::table('matkul')->insert([
            'nama_matkul' => "Pemrograman Object",
            'sks' => 4,
            'dosen_id' => 1,
        ]);
    }
}
