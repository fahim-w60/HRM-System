<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use DB;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            //Admin
            [
                'name' => 'Admin',
                'created_at' => Carbon::now(),
            ],
            //Software
            [
                'name' => 'Software',
                'created_at' => Carbon::now(),
            ],
            //Documentation
            [
                'name' => 'Documentation',
                'created_at' => Carbon::now(),
            ],
            //Operation
            [
                'name' => 'Operation',
                'created_at' => Carbon::now(),
            ],
            //Accounts
            [
                'name' => 'Accounts',
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
