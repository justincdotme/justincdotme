<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(ProjectCategoriesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectImagesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ProjectSkillsTableSeeder::class);

        Model::reguard();
    }
}
