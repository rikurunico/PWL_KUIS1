<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert(
            [
                [
                    'nama' => 'PE',
                    'source' => 'asset/img/tn-01.jpg'
            ],[
                'nama' => 'Nam tincidunt consectetur',
                'source' => 'asset/img/tn-01.jpg'
            ],[
                'nama' => 'Nam tincidunt consectetur',
                'source' => 'asset/img/tn-01.jpg'
            ]
        ]);
    }
};
