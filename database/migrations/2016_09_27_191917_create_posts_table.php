<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            
            $table->bigIncrements('id');   //
            $table->string('title');       // título do post
            $table->string('text');        // conteúdo do post
            $table->string('photo');       // caminho para a foto do post no sistema de arquivos
            $table->string('link_ticket'); // link para o endereço de vendas de tickets ou site do evento 
            $table->integer('user_id')->unsigned();    // o dono do post # chave estrangeira
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); // data e hora da criação e atualização do post
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('posts');
    }
}
