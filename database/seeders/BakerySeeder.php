<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BakerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins') -> insert([
            'nama_admin' => 'Helena J.Pakpahan',
            'nomor_telepon_admin' => '6282164304676',
            'username' => 'helena_j_pakpahan',
            'password' => 'Bakery123',
            'foto_admin' => 'admin.jpg'
        ]);

    }

}
