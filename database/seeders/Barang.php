<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert(  
            [
                [
                    'nama' => 'Rexus Daxa M84 Pro V1',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_1.jpg',
                    'harga' => 100000
                ],[
                    'nama' => 'Rexus Daxa M84 Pro V2',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_2.jpg',
                    'harga' => 100000
                ],[
                    'nama' => 'Rexus Daxa M84 Pro V3',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_3.jpg',
                    'harga' => 100000
                ],[
                    'nama' => 'Rexus Daxa M84 Pro V4',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_4.jpg',
                    'harga' => 100000
                ],[
                    'nama' => 'Rexus Daxa M84 Pro V5',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_5.jpg',
                    'harga' => 100000
                ],[
                    'nama' => 'Rexus Daxa M84 Pro V6',
                    'deskripsi' => 'Nam tincidunt consectetur',
                    'gambar' => 'template/assets/img/stuff/stuff_6.jpg',
                    'harga' => 100000
            ]
        ]);
    }
}
