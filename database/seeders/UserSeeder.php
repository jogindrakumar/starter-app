<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            //admin user
           [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('456789'),
            'role' => 'admin',
            'status' => '1',
            ],
            [
                'name' => 'SubAdmin',
                'username' => 'subadmin',
                'email' => 'subadmin@gmail.com',
                'password' => Hash::make('456789'),
                'role' => 'subadmin',
                'status' => '1',
             ],
             [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'user',
                'status' => '1',
             ]
             ]);
    }
}
