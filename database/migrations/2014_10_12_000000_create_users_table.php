<?php

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
            // Dados pessoais
            $table->increments('id');  /// identificador #  chave primária
            $table->string('name');
            $table->dateTime('date_birth');   // data de nascimento do usuário
            $table->string('gender');         // sexo 
            // Dados de endereço
            $table->string('state');          // estado onde reside 
            $table->string('city');           
            $table->string('address');        // endereço
            // Dados da conta
            $table->string('photo');          // caminho para a foto de perfil
            $table->string('email')->unique(); 
            $table->string('phone'); ///
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
