<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'department_id' => '1',
                'emp_name' => 'employee 1',
                'emp_email' => 'employee1@gmail.com',
                'emp_phone' => '01869520885',
                'emp_status' => '1',
                'emp_address' => 'Dhaka',
                'user_id' => '0', 
            ],

            [
                'emp_name' => 'employee2',
                'emp_email' => 'employee2@gmail.com',
                'emp_phone' => '01869520885',
                'emp_status' => '1',
                'emp_address' => 'Dhaka',
                'department_id' => '1',
                'user_id' => '0', 
            ],

            [
                'emp_name' => 'employee 3',
                'emp_email' => 'employee3@gmail.com',
                'emp_phone' => '01869520885',
                'emp_status' => '1',
                'emp_address' => 'Dhaka',
                'department_id' => '1',
                'user_id' => '0',
            ],

            [
                'emp_name' => 'employee 4',
                'emp_email' => 'employee4@gmail.com',
                'emp_phone' => '01869520885',
                'emp_status' => '1',
                'emp_address' => 'Dhaka',
                'department_id' => '1',
                'user_id' => '0',  
            ],
        ]);    
    }
}
