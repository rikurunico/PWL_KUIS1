<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'nama' => 'Nam tincidunt consectetur',
            'source' => 'asset/img/tn-01.jpg'
        ],
        [
            'nama' => 'Nam tincidunt consectetur',
            'source' => 'asset/img/tn-01.jpg'
        ],
        [
            'nama' => 'Nam tincidunt consectetur',
            'source' => 'asset/img/tn-01.jpg'
        ],);
    }
}
