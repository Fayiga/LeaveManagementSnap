<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		User::truncate(); 
		           $users = [ 
		            [ 
		              'name' => 'Saheed Ajayi',
		              'email' => 'saheed@ajayi.com',
		              'phone' => '08034984799',
		              'password' => '123456',
		              'job_role' => 'Laravel Developer',
		              'department_id' => '1',
		              'title_id' => '1',
		              'gender' => 'male',
		              'address' => 'adefayiga@gmail.com',
		            ],
		             [ 
		              'name' => 'Toyosi Odukoya',
		              'email' => 'totow@area.com',
		              'phone' => '0803498459',
		              'password' => '123456',
		              'job_role' => 'Laravel Developer',
		              'department_id' => '2',
		              'title_id' => '1',
		              'gender' => 'male',
		              'address' => 'adefayiga@gmail.com',
		            ],
		             [ 
		              'name' => 'Saheed Tyin',
		              'email' => 'toyin@ajayi.com',
		              'phone' => '08035684799',
		              'password' => '123456',
		              'job_role' => 'Laravel Developer',
		              'department_id' => '3',
		              'title_id' => '2',
		              'gender' => 'female',
		              'address' => 'toyin@gmail.com',
		            ],
		          ];

		          foreach($users as $user)
		          {
		              User::create([
		               'name' => $user['name'],
		               'email' => $user['email'],
		               'phone' => $user['phone'],
		               'password' => Hash::make($user['password']),
		               'job_role' => $user['job_role'],
		               'department_id' => $user['department_id'],
		               'title_id' => $user['title_id'],
		               'gender' => $user['gender'],
		               'address' => $user['address'],
		             ]);
		           }
		    }
}
