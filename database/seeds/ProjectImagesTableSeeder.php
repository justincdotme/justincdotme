<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_images')->insert([
            'project'       => 1,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 2,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 3,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 4,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 5,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 6,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 7,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project'       => 8,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);
    }
}
