<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MadinEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('madin_education')->insert([
            [
                'name' => 'Sifir',
            ],
            [
                'name' => '1 MID',
            ],
            [
                'name' => '2 MID',
            ],
            [
                'name' => '3 MID',
            ],
            [
                'name' => '4 MID',
            ],
            [
                'name' => '5 MID',
            ],
            [
                'name' => '6 MID',
            ],

            [
                'name' => '1 MTSD',
            ],
            [
                'name' => '2 MTSD',
            ],
            [
                'name' => '3 MTSD',
            ],

        ]);
    }
}
