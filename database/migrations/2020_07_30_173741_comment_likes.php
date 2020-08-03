<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('comment_likes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('comment_likes', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('comments')
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
        Schema::drop('comment_likes');
        Schema::table('comment_likes', function (Blueprint $table) {
            $table->dropForeign('comment_likes_user_id_foreign');
        });
        Schema::table('comment_likes', function (Blueprint $table) {
            $table->dropForeign('comment_likes_comment_id_foreign');
        });
    }
}
