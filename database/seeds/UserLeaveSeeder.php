<?php

use Illuminate\Database\Seeder;
use App\UsersLeave;
class UserLeaveSeeder extends Seeder
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
		              'user_id' => 1,
		              'number_of_leave_days' => 20,
		              'number_of_leave_days_used' => 0,
		              'password' => 0,
		              'job_role' => 0,
		              'year' => 2021,
		            ],
		             [ 
		              'user_id' => 2,
		              'number_of_leave_days' => 20,
		              'number_of_leave_days_used' => 0,
		              'number_of_leave_days_remaining' => 0,
		              'year' => 2021,
		            ],
		             [ 
		              'user_id' => 3,
		              'number_of_leave_days' => 20,
		              'number_of_leave_days_used' => 0,
		              'number_of_leave_days_remaining' => 0,
		              'year' => 2021,
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
