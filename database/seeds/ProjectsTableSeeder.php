<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_category_id'   => 1,
            'name'                  => 'FawkesFX',
            'live_url'              => 'http://fawkesfx.com',
            'admin_url'             => null,
            'github_url'            => null,
            'case_study'            => '<p class="indent project-case-p">Fawkes FX is a creative firm located in Portland, OR that I helped establish. We required a public website to showcase our services. The website also reuired a private administration interface with transactional email integration.</p>
                                        <p class="indent project-case-p last-paragraph">The front end team at FawkesFX designed and built the public website, which I merged into a Laravel 4 application. I then designed and developed the administration interface featuring several custom modules including a user management module, an SEO module and a leads management module.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 1,
            'name'                  => 'Reliable Mobile Labs',
            'live_url'              => 'http://reliablemobilelabs.com',
            'admin_url'             => null,
            'github_url'            => null,
            'case_study'            => '<p class="indent project-case-p">Reliable Mobile Labs is a medical lab testing service with locations in several states. The client required a website to showcase their services, generate leads and allow physicians to log into a portal within the website.</p>
                                        <p class="indent project-case-p last-paragraph">The team at FawkesFX put together the design and concept for this project. I assisted the front end team with client side development using JavaScript, some HTML and CSS. I then created a lead management system using PHP and capped it off with a router to allow for search engine friendly URLs.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 1,
            'name'                  => 'Belssage',
            'live_url'              => 'http://www.belssage.com',
            'admin_url'             => null,
            'github_url'            => null,
            'case_study'            => '<p class="indent project-case-p">Belssage is a massage therapy provider in Rapid City, SD. This project required a contact form for appointment scheduling, publishing of a quarterly newsletter, easy page updates and a list &amp; description of provided services.</p>
                                        <p class="indent project-case-p last-paragraph">I designed the website using Photoshop and built the WordPress theme using HTML, CSS, PHP and JavaScript.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 2,
            'name'                  => 'bookMe',
            'live_url'              => 'https://bookme.justinc.me',
            'admin_url'             => 'https://bookme.justinc.me/admin',
            'github_url'            => 'https://github.com/justincdotme/bookme',
            'case_study'            => '<p class="indent project-case-p">bookMe is a personal project that I built in my free time using PHP5 and MySQL. The goal of this project was to create a fully functional property booking application from scratch using MVC architecture.</p>
                                        <p class="indent project-case-p last-paragraph">The public site features property listings, a property availability module and a reservation booking module. The administrative interface features a user management module, a reservation management module and a property management module. The property management module comes complete with a rich text editor and image uploader.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 2,
            'name'                  => 'fooCart',
            'live_url'              => 'https://foocart.justinc.me/',
            'admin_url'             => 'https://foocart.justinc.me/admin',
            'github_url'            => 'https://github.com/justincdotme/foocart',
            'case_study'            => '<p class="indent project-case-p">fooCart is a personal project that I built in my free time using Laravel 5. The primary goal was to develop an e-commerce application with shopping cart, inventory management and payment processing integration.</p>
                                        <p class="indent project-case-p last-paragraph">The public site features a JavaScript based inventory display module that uses the Handlebars JS library for client side templating. The public site also features a checkout module with on-site input of payment information. The administration interface features an inventory management module, user management module, slideshow management module and message management module.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 2,
            'name'                  => 'FindMyISP',
            'live_url'              => 'https://findmyisp.justinc.me/',
            'admin_url'             => null,
            'github_url'            => 'https://github.com/justincdotme/findmyisp',
            'case_study'            => '<p class="indent project-case-p">FindMyISP is a personal project that I built in my free time. The primary goals of this project were to inform a user of who their current ISP is and display other ISP options in the user&#39;s area.</p>
                                        <p class="indent project-case-p last-paragraph">The application utilizes the HTML5 Geolocation API to get the user&#39;s current location and then uses the IpInfo API to obtain the users ISP. The IpInfo API is also used as a geolocation fallback, should the user&#39;s browser not support geolocation. The application then uses the Google Places Web Services API to determine nearby ISPs.</p>',
            'testimonial'           => null
        ]);

        DB::table('projects')->insert([
            'project_category_id'   => 2,
            'name'                  => 'TweetMe',
            'live_url'              => 'http://tweetme.justinc.me/',
            'admin_url'             => null,
            'github_url'            => 'https://github.com/justincdotme/tweetme',
            'case_study'            => '<p class="indent project-case-p">TweetMe is a Twitter feed application that I developed in my free time. The primary goal of this project was to create an application to pull in a controllable number of statuses from a Twitter user&#39;s public timeline.</p>
                                        <p class="indent project-case-p last-paragraph">This application retrieves the statuses via the Twitter REST API, then caches the JSON responses to a flat file 15 minutes to avoid the Twitter API rate limits. Next, TweetMe repackages the cached JSON response to filter out unneeded properties and then outputs the repackaged timeline in either JSON or formatted HTML.</p>',
            'testimonial'           => null
        ]);
    }
}
