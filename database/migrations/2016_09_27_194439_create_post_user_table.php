<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    // Likes é uma relação NxM entre posts e users

    public function up() {
        Schema::create('post_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down() {
        Schema::drop('likes');
    }
}
