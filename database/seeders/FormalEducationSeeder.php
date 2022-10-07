<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormalEducationSeeder extends Seeder
{

    public function run()
    {
        DB::table('formal_education')->insert([
            [
                'full_name' => 'Madrasah Ibtidaiyah',
                'name' => 'MI ',
            ],
            [
                'full_name' => 'Madrasah Tsanawiyah 1',
                'name' => 'MTs 1 ',
            ],
            [
                'full_name' => 'Madrasah Tsanawiyah 2',
                'name' => 'MTs 2 ',
            ],
            [
                'full_name' => 'Madrasah Aliyah 1',
                'name' => 'MA 1 ',
            ],
            [
                'full_name' => 'Madrasah Aliyah 2',
                'name' => 'MA 2 ',
            ],
            [
                'full_name' => 'Perguruan Tinggi',
                'name' => 'STIS ',
            ],
        ]);
    }
}
