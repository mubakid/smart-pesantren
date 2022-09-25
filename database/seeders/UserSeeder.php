<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'super_admin', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'sekretariat', 'guard_name' => 'web'],
            ['name' => 'bendahara', 'guard_name' => 'web'],
            ['name' => 'hankamtib', 'guard_name' => 'web'],
            ['name' => 'madin', 'guard_name' => 'web'],
            ['name' => 'santri_baru', 'guard_name' => 'web'],
            ['name' => 'santri_aktif', 'guard_name' => 'web'],
            ['name' => 'alumni', 'guard_name' => 'web'],
            ['name' => 'asatidz', 'guard_name' => 'web'],
        ]);
        $u = User::create([
            'name' => 'Malik',
            'email' => '085',
            'password' => Hash::make('password')
        ]);
        $u->assignRole('admin');
        // $u->assignRole('admin');
    }
}
