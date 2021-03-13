<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate(); 
           $departments = [ 
            [ 
              'dept_name' => 'Technology',
            ],
            [
              'dept_name' => 'Human apd_dump_regular_resources()',
            ],
             [
              'dept_name' => 'Poduction',
            ] 
          ];

          foreach($departments as $department)
          {
              Department::create([
               'dept_name' => $department['dept_name'],
             ]);
           }
    }
}
