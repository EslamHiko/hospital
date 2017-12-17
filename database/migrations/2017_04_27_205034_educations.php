<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Educations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('Cascade');
            $table->string('year')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('university')->nullable();
            $table->timestamps();
        });
        Schema::create('contact_us_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('msg')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('subject')->nullable();
            $table->timestamps();
        });
        Schema::create('public_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('msg')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
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
