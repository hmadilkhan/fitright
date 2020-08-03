<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('timeline_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('active')->default(1);
            $table->string('soundcloud_title', 250)->nullable();
            $table->string('soundcloud_id', 255)->nullable();
            $table->string('youtube_title', 255)->nullable();
            $table->string('youtube_video_id', 250)->nullable();
            $table->string('location', 250)->nullable();
            $table->string('type', 100)->nullable();
            $table->integer('shared_post_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
