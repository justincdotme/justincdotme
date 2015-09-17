<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert([
            'category' => 'professional'
        ]);

        DB::table('project_categories')->insert([
            'category' => 'personal'
        ]);
    }
}