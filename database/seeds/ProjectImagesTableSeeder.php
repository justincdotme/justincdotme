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
            'project_id'    => 1,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 2,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 3,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 4,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 5,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 6,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 7,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);

        DB::table('project_images')->insert([
            'project_id'    => 8,
            'full_path'     => '/images/portfolio/xxxxxx-full.png',
            'thumb_path'    => '/images/portfolio/xxxxxx-thumb.png',
            'alt_text'      => null
        ]);
    }
}
