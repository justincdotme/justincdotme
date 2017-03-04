<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'skill' => 'Laravel 4'
        ]);
        DB::table('skills')->insert([
            'skill' => 'Laravel 5'
        ]);
        DB::table('skills')->insert([
            'skill' => 'Object Oriented PHP'
        ]);
        DB::table('skills')->insert([
            'skill' => 'MySQL'
        ]);
        DB::table('skills')->insert([
            'skill' => 'Javascript & jQuery'
        ]);
        DB::table('skills')->insert([
            'skill' => 'HTML & CSS (SCSS)'
        ]);
        DB::table('skills')->insert([
            'skill' => 'Web Server Administration'
        ]);
        DB::table('skills')->insert([
            'skill' => 'ORM (Eloquent)'
        ]);
        DB::table('skills')->insert([
            'skill' => 'REST API Development'
        ]);
        DB::table('skills')->insert([
            'skill' => 'REST API Consumption'
        ]);
    }
}
