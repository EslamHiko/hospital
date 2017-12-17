<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birth_date')->nullable();
            $table->string('role')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('tw_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('address')->nullable();
            $table->string('prof_img')->default('/images/doctor1.jpg')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('Cascade');
            $table->text('bio')->nullable();
            $table->string('work_days')->nullable();
            $table->string('position')->nullable();
            $table->string('exp_years')->nullable();
            $table->string('office_address')->nullable();
            $table->timestamps();
        });
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('msg')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('service')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('doctors');
    }
}
