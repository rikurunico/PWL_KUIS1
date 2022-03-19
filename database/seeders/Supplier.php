<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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