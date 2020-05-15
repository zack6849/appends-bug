<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            'HR',
            'Accounting',
            'IT',
            'Customer Service',
            'Sales',
            'Marketing'
        ];
        
        foreach ($departments as $name){
            Department::create(compact('name'));
        }
    }
}
