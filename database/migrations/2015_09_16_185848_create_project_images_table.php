<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProjectImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_images', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project');
            $table->foreign('project')->references('id')->on('projects');
            $table->string('full_path');
            $table->string('thumb_path');
            $table->string('alt_text');
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
        Schema::drop('project_images');
    }
}
