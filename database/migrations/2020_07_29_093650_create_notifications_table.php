<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('timeline_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('notified_by')->unsigned();
            $table->boolean('seen')->default(0);
            $table->text('description');
            $table->string('type', 250);
            $table->string('link', 250)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('timeline_id')->references('id')->on('timelines')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('notified_by')->references('id')->on('users')
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
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_post_id_foreign');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_timeline_id_foreign');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_user_id_foreign');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_notified_by_foreign');
        });

        Schema::dropIfExists('notifications');
    }
}
