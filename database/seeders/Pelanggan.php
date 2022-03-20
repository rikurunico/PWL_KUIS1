<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert(
            [
                [
                    'nama' => 'Wazir',
                    'source' => 'template/assets/img/Pelanggan/person_1.jpg',
                    'alamat' => 'Semanggi Barat No.1',
                    'totalpembelian' => 100000
                ],[
                    'nama' => 'Aditya',
                    'source' => 'template/assets/img/Pelanggan/person_2.jpg',
                    'alamat' => 'Semanggi Timur No.2',
                    'totalpembelian' => 150000
                ],[
                    'nama' => 'Nico',
                    'source' => 'template/assets/img/Pelanggan/person_3.jpg',
                    'alamat' => 'Lamongan',
                    'totalpembelian' => 170000
                ],[
                    'nama' => 'Raihan',
                    'source' => 'template/assets/img/Pelanggan/person_4.jpg',
                    'alamat' => 'Pandaan',
                    'totalpembelian' => 180000
                ]
        ]);
    }
}
