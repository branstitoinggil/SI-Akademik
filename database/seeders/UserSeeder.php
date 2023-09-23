<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => "Ahmad Sultoni",
            'nip' => "4123121133",
            'no_hp' => "08221231133",
            'email' => "sultoni@gmail.com",
            'password' => bcrypt('password'),
            
        ]);
    }
}
