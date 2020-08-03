<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('timeline_id')->unsigned();
            $table->string('name', 250);
            $table->string('slug', 250);
            $table->text('about');
            $table->integer('preview_id')->unsigned()->nullable();
            $table->boolean('active')->default(1);
            $table->string('privacy', 15);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('timeline_id')->references('id')->on('timelines')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('preview_id')->references('id')->on('media')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::create('album_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('album_id')->unsigned();
            $table->integer('media_id')->unsigned();
        });
        Schema::table('album_media', function (Blueprint $table) {
            $table->foreign('album_id')->references('id')->on('albums')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('album_media', function (Blueprint $table) {
            $table->foreign('media_id')->references('id')->on('media')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign('albums_timeline_id_foreign');
        });
        Schema::table('albums', function (Blueprint $table) {
            $table->dropForeign('albums_preview_id_foreign');
        });
        Schema::table('album_media', function (Blueprint $table) {
            $table->dropForeign('album_media_album_id_foreign');
        });
        Schema::table('album_media', function (Blueprint $table) {
            $table->dropForeign('album_media_media_id_foreign');
        });
        chema::drop('album_media');
        Schema::dropIfExists('albums');
    }
}
