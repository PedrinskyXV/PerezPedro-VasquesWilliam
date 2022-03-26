<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert(
            [
                [
                    'employee_name' => 'James Bond',
                    'age' => 25,
                    'base_salary' => 500.21,
                    'area_id' => 1,
                    'created_at' => now()
                ],
                [
                    'employee_name' => 'Peter Parker',
                    'age' => 21,
                    'base_salary' => 340.11,
                    'area_id' => 2,
                    'created_at' => now()
                ],
                [
                    'employee_name' => 'Mickey Mouse',
                    'age' => 18,
                    'base_salary' => 740.11,
                    'area_id' => 3,
                    'created_at' => now()
                ],
                [
                    'employee_name' => 'John Wick',
                    'age' => 32,
                    'base_salary' => 666.66,
                    'area_id' => 4,
                    'created_at' => now()
                ],
                [
                    'employee_name' => 'William Vasquez',
                    'age' => 28,
                    'base_salary' => 640.36,
                    'area_id' => 5,
                    'created_at' => now()
                ]
            ]
        );
    }
}
