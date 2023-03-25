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
                'dept_status' => 1,
                'created_at' => Carbon::now(),
            ],
            //Software
            [
                'name' => 'Software',
                'dept_status' => 1,
                'created_at' => Carbon::now(),
            ],
            //Documentation
            [
                'name' => 'Documentation',
                'dept_status' => 1,
                'created_at' => Carbon::now(),
            ],
            //Operation
            [
                'name' => 'Operation',
                'dept_status' => 1,
                'created_at' => Carbon::now(),
            ],
            //Accounts
            [
                'name' => 'Accounts',
                'dept_status' => 1,
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
