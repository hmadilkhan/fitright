<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 250)->unique();
            $table->string('name', 250);
            $table->text('about');
            $table->integer('avatar_id')->unsigned()->nullable();
            $table->integer('cover_id')->unsigned()->nullable();
            $table->string('cover_position', 255)->nullable();
            $table->string('type');
            $table->integer('hide_cover')->default(0);
            $table->integer('background_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('avatar_id')->references('id')->on('media');
            $table->foreign('background_id')->references('id')->on('media');
            $table->foreign('cover_id')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelines');
    }
}
