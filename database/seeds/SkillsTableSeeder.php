<?php

use App\Models\Skill;
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
        Skill::create([
            'skill' => 'Laravel 4'
        ]);
        Skill::create([
            'skill' => 'Laravel 5'
        ]);
        Skill::create([
            'skill' => 'Object Oriented PHP'
        ]);
        Skill::create([
            'skill' => 'MySQL'
        ]);
        Skill::create([
            'skill' => 'Javascript & jQuery'
        ]);
        Skill::create([
            'skill' => 'HTML & CSS (SCSS)'
        ]);
        Skill::create([
            'skill' => 'Web Server Administration'
        ]);
        Skill::create([
            'skill' => 'ORM (Eloquent)'
        ]);
        Skill::create([
            'skill' => 'REST API Development'
        ]);
        Skill::create([
            'skill' => 'REST API Consumption'
        ]);
    }
}
