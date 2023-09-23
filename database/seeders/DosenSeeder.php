<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'nama' => "ahmad subagja",
            'nid' => "20314512311",
            'no_hp' => "0892123121",
            'email' => "Ahmadsubagja@gmail.com",
        ]);

        DB::table('dosen')->insert([
            'nama' => "Sutono",
            'nid' => "20314512312",
            'no_hp' => "08921231123",
            'email' => "Sutono@gmail.com",
            
        ]);

        DB::table('dosen')->insert([
            'nama' => "Dadang",
            'nid' => "20314512344",
            'no_hp' => "08921231222",
            'email' => "Dadang@gmail.com",
            
        ]);

        DB::table('dosen')->insert([
            'nama' => "Agren",
            'nid' => "20314512333",
            'no_hp' => "08921231144",
            'email' => "agren@gmail.com",
            
        ]);

    }
}
