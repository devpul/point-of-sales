<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::insert([
            // untk admin
            [
                'name' => 'admin',
                'phone' => '08123456',
                'email' => 'admin@gmail.com',
                'password' => 'admin',
                'level' => 'admin',
                'registered_at' => now(),
                'updated_at' => now(),
                'status' => 'active'
            ],
            // untk manager
            [
                'name' => 'manager',
                'phone' => '08123457',
                'email' => 'manager@gmail.com',
                'password' => 'manager',
                'level' => 'manager',
                'registered_at' => now(),
                'updated_at' => now(),
                'status' => 'active'
            ],
            // untk kasir
            [
                'name' => 'kasir',
                'phone' => '08123458',
                'email' => 'kasir@gmail.com',
                'password' => 'kasir',
                'level' => 'kasir',
                'registered_at' => now(),
                'updated_at' => now(),
                'status' => 'active'
            ],
        ]);
    }
}
