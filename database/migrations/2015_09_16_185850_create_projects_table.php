<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_category_id')->unsigned();
            $table->foreign('project_category_id')->references('id')->on('project_categories');
            //Project Images are loaded via Eloquent relationship
            //Skills are loaded via n-n Eloquent relationship + pivot table
            $table->string('name');
            $table->string('live_url')->nullable();
            $table->string('admin_url')->nullable();
            $table->string('github_url')->nullable();
            $table->text('case_study');
            $table->text('testimonial')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
