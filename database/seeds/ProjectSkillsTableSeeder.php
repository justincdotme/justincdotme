<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 1
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 4
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 1,
            'skill_id'      => 8
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 2,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 2,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 2,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 3,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 3,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 3,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 4,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 4,
            'skill_id'      => 4
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 4,
            'skill_id'      => 10
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 4,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 4,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 2
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 4
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 10
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 5,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 6,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 6,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 6,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 6,
            'skill_id'      => 12
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 7,
            'skill_id'      => 3
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 7,
            'skill_id'      => 5
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 7,
            'skill_id'      => 7
        ]);

        DB::table('project_skill')->insert([
            'project_id'    => 7,
            'skill_id'      => 12
        ]);
    }
}
