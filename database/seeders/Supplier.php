<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert(   
            [       
            [
            'nama' => 'Microsoft ',
            'source' => 'template/assets/img/Supplier/Microsoft-removebg.png',
            'deskripsi1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, modi!',
            'deskripsi2' => '            Lorem ipsum dolor sit amet.',
            'deskripsi3' => 'LOREM ME'
            ],
            [
                'nama' => 'Microsoft ',
                'source' => 'template/assets/img/Supplier/Microsoft.png',
                'deskripsi1' => 'Loren 50',
                'deskripsi2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, modi!.',
                'deskripsi3' => 'C'
                ],
    ]);
    }
}
