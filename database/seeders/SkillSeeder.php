<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        DB::table('tools')->insert (['name' => 'Gestión de equipo', 'color' => 'primary', 'url' => '']);
        DB::table('tools')->insert (['name' => 'Planificación de tareas', 'color' => 'success', 'url' => '']);
        DB::table('tools')->insert (['name' => 'Trabajo en equipo', 'color' => 'warning', 'url' => '']);
        DB::table('tools')->insert (['name' => 'Manejo del estrés', 'color' => 'info', 'url' => '']);
        DB::table('tools')->insert (['name' => 'Resolución de problemas', 'color' => 'muted', 'url' => '']);

    }
}
