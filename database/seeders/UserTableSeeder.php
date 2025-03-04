<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => "Hailopia",
                'username' => 'haileopia',
                'email' => 'haileopia@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'admin',
                'status' => 'active'
            ],
            // agent
            [
                'name' => "agent",
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'agent',
                'status' => 'active'
            ],
            // user
            [
                'name' => "user",
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'user',
                'status' => 'active'
            ],
        ]);
    }
}
