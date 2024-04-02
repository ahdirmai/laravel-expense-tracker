<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'Admin',
            'email' =>  'admin@gmail.com',
            'password' => bcrypt('password'),
        ];

        $user = \App\Models\User::create($admin);
        $user->assignRole('admin');
    }
}
