<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('tools')->insert ([
        'name' => 'Bootstrap',
        'color' => 'warning',
        'url' => '/img/bootstrap.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'CSS 3',
        'color' => 'secondary',
        'url' => '/img/css3.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'HTML 5',
        'color' => 'success',
        'url' => '/img/html5.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'Javascript',
        'color' => 'dark',
        'url' => '/img/javascript.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'Laravel',
        'color' => 'info',
        'url' => '/img/laravel.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'MySQL',
        'color' => 'danger',
        'url' => '/img/mariadb.png'
      ]);
      DB::table('tools')->insert ([
        'name' => 'PHP 8',
        'color' => 'light',
        'url' => '/img/php.png'
      ]);
    }
}
