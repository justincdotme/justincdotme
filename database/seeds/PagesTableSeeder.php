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
            'content'       => '<div class="row">
                                <div class="col-sm-12 text-center">
                                <noscript>&lt;h1 class="js-error"&gt;JavaScript is required to view this page!&lt;/h1&gt;</noscript>
                                <h1 class="home-head white">Justin Christenson is a Web Developer in Vancouver, WA.</h1>
                                <a class="scroll btn info-button btn-lg" href="#about" id="learn-more"><span class="glyphicon glyphicon-arrow-down"></span> Learn More <span class="glyphicon glyphicon-arrow-down"></span></a>
                                </div>
                                </div>'
        ]);

        DB::table('pages')->insert([
            'name'          => 'bio',
            'title'         => 'Justin Christenson - Web Developer - Bio',
            'description'   => 'The biography of Justin Christenson, Web Developer',
            'keywords'      => 'web developer, php, laravel, developer, mysql, database, javascript, html, css, portland, vancouver',
            'content'       => '<div class="row">
                                <div class="col-sm-12">
                                <div class="panel dark-panel panel-default about-panel">
                                <div class="panel-body">
                                <div class="row">
                                <div class="col-sm-3 about-image">
                                <div class="thumbnail dark-panel">
                                <img class="deferred" data-src="/images/jc-1.jpg" src="/images/jc-1.jpg">
                                <div class="caption about-caption">
                                <ul class="about-details">
                                <li><strong>Phone</strong>: <a href="tel:+16053817180">605-381-7180</a></li>
                                <li><strong>Email</strong>: <a href="mailto:info@justinc.me">info@justinc.me</a></li>
                                <li><strong>GitHub</strong>: <a target="_BLANK" href="https://github.com/justincdotme">justincdotme</a></li>
                                </ul>
                                </div>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <h3 class="inline">Hello World,</h3>
                                <a target="_BLANK" href="/justin-christenson-resume.pdf" class="white inline pull-right about-resume btn-inverse btn-sm btn"><span class="glyphicon glyphicon-download"></span> View Resume</a>
                                <p class="indent">I\'m a web developer, open source enthusiast and Jedi Apprentice living in beautiful Vancouver, WA. I started my career as a front end developer after earning a degree in Web Design and Interactive Media in 2011.</p>
                                <p class="indent">I worked as a front end developer after graduation but soon realized that I have an even greater love for writing server side code. At this point, I began teaching myself back end development on a LAMP stack in my free time while continuing to work primarily as a front end developer.</p>
                                <p class="indent">I currently work as a freelance web developer creating applications using PHP and MySQL. I also enjoy using the Laravel framework on larger projects.</p>
                                <p class="indent last-paragraph">While I have your attention, check out my <a target="_BLANK" href="https://github.com/justincdotme">GitHub</a> profile or view some of my <a href="#portfolio" class="scroll">work</a>. Also, feel free to <a href="#contact" class="scroll">drop me a line</a>.</p>
                                </div>
                                <div class="col-sm-3">
                                <h3 class="skills-head">Skill Set</h3>
                                <ul class="skills">
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> Object Oriented PHP
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> SQL (MySQL &amp; PostgreSQL)
                                </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> Laravel
                                </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> WordPress
                                </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> JavaScript &amp; jQuery
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> HTML / CSS
                                </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> Git
                                </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> LEMP / LAMP Administration
                                    </li>
                                </ul>
                                <h3 class="skills-head">Experience With</h3>
                                <ul class="skills">
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> MVC Architecture
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> REST APIs
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> DNS Administration
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> Mail Server Administration
                                    </li>
                                <li class="skill">
                                <span class="glyphicon glyphicon-chevron-right blue"></span> Lightsaber Construction
                                    </li>
                                </ul>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-12">
                                <p class="text-center"><a class="scroll btn info-button btn-lg view-work" href="#portfolio"><span class="glyphicon glyphicon-arrow-down"></span> View Work <span class="glyphicon glyphicon-arrow-down"></span></a></p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>'
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
