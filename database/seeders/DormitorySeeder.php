<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DormitorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('dormitories')->insert([
            [
                'name' => 'A',
                'gender' => 'L',
                'rooms' => 16,
            ],
            [
                'name' => 'B',
                'gender' => 'L',
                'rooms' => 13,
            ],
            [
                'name' => 'C',
                'gender' => 'L',
                'rooms' => 18,
            ],
            [
                'name' => 'D',
                'gender' => 'L',
                'rooms' => 26,
            ],
            [
                'name' => 'E',
                'gender' => 'L',
                'rooms' => 13,
            ],
            [
                'name' => 'F',
                'gender' => 'L',
                'rooms' => 18,
            ],
            [
                'name' => 'G',
                'gender' => 'L',
                'rooms' => 21,
            ],
            [
                'name' => 'LPBA',
                'gender' => 'L',
                'rooms' => 4,
            ],
            [
                'name' => 'A',
                'gender' => 'P',
                'rooms' => 8,
            ],
            [
                'name' => 'B',
                'gender' => 'P',
                'rooms' => 4,
            ],
            [
                'name' => 'C',
                'gender' => 'P',
                'rooms' => 5,
            ],
            [
                'name' => 'D',
                'gender' => 'P',
                'rooms' => 7,
            ],
            [
                'name' => 'E',
                'gender' => 'P',
                'rooms' => 4,
            ],
            [
                'name' => 'F',
                'gender' => 'P',
                'rooms' => 6,
            ],
        ]);
    }
}
