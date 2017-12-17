<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminThings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('value')->nullable();
            $table->timestamps();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('desc')->nullable();
            $table->timestamps();
        });
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->string('title')->nullable();
            $table->string('img_path')->nullable()->default('/images/doctor1.jpg');
            $table->string('desc')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->timestamps();
        });
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->text('img_path')->nullable()->default('/images/doctor1.jpg');
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
        //
    }
}
