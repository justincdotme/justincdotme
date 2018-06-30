<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProjectImage as Image;

class ProjectImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'project_id'    => 1,
            'image_path'     => '/img/portfolio/fawkesfx-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 2,
            'image_path'     => '/img/portfolio/reliableMobileLabs-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 3,
            'image_path'     => '/img/portfolio/belssage-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 4,
            'image_path'     => '/img/portfolio/bookme-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 5,
            'image_path'     => '/img/portfolio/foocart-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 6,
            'image_path'     => '/img/portfolio/findmyisp-shot.jpg',
            'alt_text'      => null
        ]);

        Image::create([
            'project_id'    => 7,
            'image_path'     => '/img/portfolio/tweetme-shot.jpg',
            'alt_text'      => null
        ]);
    }
}
