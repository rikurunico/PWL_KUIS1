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
                    'nama' => 'Walter White',
                    'source' => 'template/assets/img/team/team-1.jpg',
                    'jabatan' => 'Chief Executive Officer'
                ],[
                    'nama' => 'Sarah Jhonson',
                    'source' => 'template/assets/img/team/team-2.jpg',
                    'jabatan' => 'Product Manager '
                ],[
                    'nama' => 'William Anderson',
                    'source' => 'template/assets/img/team/team-3.jpg',
                    'jabatan' => 'CTO'
                ],[
                    'nama' => 'Amanda Jepson',
                    'source' => 'template/assets/img/team/team-4.jpg',
                    'jabatan' => 'Accountant'
            ]
        ]);
    }
};
