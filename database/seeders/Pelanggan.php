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
                ],[
                    'nama' => 'Mark',
                    'source' => 'template/assets/img/Pelanggan/person_5.jpg',
                    'alamat' => 'Jember',
                    'totalpembelian' => 180000
                ],[
                    'nama' => 'Puttin',
                    'source' => 'template/assets/img/Pelanggan/person_6.jpeg',
                    'alamat' => 'Rushian',
                    'totalpembelian' => 1800006
                ],[
                    'nama' => 'Aib',
                    'source' => 'template/assets/img/Pelanggan/person_7.jpeg',
                    'alamat' => 'Sidoarjo',
                    'totalpembelian' => 1800005
                ],[
                    'nama' => 'Bia',
                    'source' => 'template/assets/img/Pelanggan/person_8.jpg',
                    'alamat' => 'Makasar',
                    'totalpembelian' => 1800003
                ],[
                    'nama' => 'Ricoco',
                    'source' => 'template/assets/img/Pelanggan/person_9.jpg',
                    'alamat' => 'Jakarta',
                    'totalpembelian' => 1800004
                ],[
                    'nama' => 'Ricoka',
                    'source' => 'template/assets/img/Pelanggan/person_10.jpg',
                    'alamat' => 'Jakarta',
                    'totalpembelian' => 18000099
                ],[
                    'nama' => 'Ricoyo',
                    'source' => 'template/assets/img/Pelanggan/person_11.jpg',
                    'alamat' => 'Jakarta',
                    'totalpembelian' => 1800000
                ]
        ]);
    }
}
