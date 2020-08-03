<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('timeline_id')->unsigned();
            $table->string('email', 250);
            $table->string('verification_code', 250)->default(0);
            $table->boolean('email_verified')->nullable();
            $table->string('remember_token', 250);
            $table->string('password', 250);
            $table->float('balance')->default(0);
            $table->date('birthday');
            $table->string('city', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('designation')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('interests')->nullable();
            $table->string('custom_option1')->nullable();
            $table->string('custom_option2')->nullable();
            $table->string('custom_option3')->nullable();
            $table->string('custom_option4')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamp('last_logged')->nullable();
            $table->string('timezone')->nullable();
            $table->integer('affiliate_id')->unsigned()->nullable();
            $table->string('language', 15)->nullable();
            $table->string('facebook_link', 250)->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('dribbble_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('timeline_id')->references('id')->on('timelines');
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
    }
}
