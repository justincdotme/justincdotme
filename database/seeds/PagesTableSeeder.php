<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name'          => 'home',
            'title'         => 'Justin Christenson is a web Developer in Vancouver, WA',
            'description'   => 'Justin Christenson is a Web Developer specializing in PHP applications.',
            'keywords'      => 'web developer, php, laravel, developer, mysql, database, javascript, html, css, portland, vancouver',
            'content'       => null
        ]);

        DB::table('pages')->insert([
            'name'          => 'about',
            'title'         => 'Justin Christenson - Web Developer - Bio',
            'description'   => 'The biography of Justin Christenson, Web Developer',
            'keywords'      => 'web developer, php, laravel, developer, mysql, database, javascript, html, css, portland, vancouver',
            'content'       => null
        ]);

        DB::table('pages')->insert([
            'name'          => 'portfolio',
            'title'         => 'Justin Christenson - Review my Portfolio',
            'description'   => 'The professional portfolio of Justin Christenson, Web Developer',
            'keywords'      => 'justin christenson, portfolio, web developer, php, laravel, developer, mysql, database, javascript, html, css',
            'content'       => null
        ]);

        DB::table('pages')->insert([
            'name'          => 'contact',
            'title'         => 'Contact Justin Christenson',
            'description'   => 'Contact Justin Christenson',
            'keywords'      => 'justin christenson, contact, phone, email, linkedin, twitter, github, git hub, google plus, google+',
            'content'       => null
        ]);
    }
}
