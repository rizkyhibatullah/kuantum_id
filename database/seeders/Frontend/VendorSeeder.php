<?php

namespace Database\Seeders\Frontend;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('vendor123'),
            'user_type' => 'vendor'
        ]);
    }
}
