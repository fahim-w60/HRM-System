<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            
            //chairman
            [
                'name' => 'chairman',
                'username' => 'chairman',
                'email' => 'chairman@gmail.com',
                'password' =>Hash::make('12345678'),
                'phone' => '01869520885',
                'gender' => 'male',
                'status' => '1',
                'address' => 'Dhaka',
                'user_type' => 'chairman',
            ],

            //director general
            [
                'name' => 'dg',
                'username' => 'dg',
                'email' => 'dg@gmail.com',
                'password' =>Hash::make('12345678'),
                'phone' => '01869520885',
                'gender' => 'male',
                'status' => '1',
                'address' => 'Banasree,Dhaka',
                'user_type' => 'director_general',
                
            ],

            //director
            [
                'name' => 'diredtor',
                'username' => 'director',
                'email' => 'director@gmail.com',
                'password' =>Hash::make('12345678'),
                'phone' => '01869520885',
                'gender' => 'male',
                'status' => '1',
                'address' => 'Banasree,Dhaka',
                'user_type' => 'director',
                
            ],

            //hr_manager
            [
                'name' => 'hr_manager',
                'username' => 'adhr_managermin',
                'email' => 'hr_manager@gmail.com',
                'password' =>Hash::make('12345678'),
                'phone' => '01869520885',
                'gender' => 'male',
                'status' => '1',
                'address' => 'Banasree,Dhaka',
                'user_type' => 'hr_manager',
                
            ],

            //employee
            [
                'name' => 'employee',
                'username' => 'employee',
                'email' => 'employee@gmail.com',
                'password' =>Hash::make('12345678'),
                'phone' => '01869520885',
                'gender' => 'male',
                'status' => '1',
                'address' => 'Banasree,Dhaka',
                'user_type' => 'employee',
            ],
        ]);
    }
}
