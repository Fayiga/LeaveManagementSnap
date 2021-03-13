<?php

use Illuminate\Database\Seeder;
use App\Title;
class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate(); 
           $titles = [ 
            [ 
              'title' => 'Mr',
            ],
            [
              'title' => 'Mrs',
            ]
          ];

          foreach($titles as $title)
          {
              Title::create([
               'title' => $title['title'],
             ]);
           }
    }
}
