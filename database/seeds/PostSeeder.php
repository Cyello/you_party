<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        DB::table('posts')->insert([
        	'title' => 'Hardwell tomorrowland',
        	'text' => 'Algum texto aqui a ser escrito',
        	'photo' => 'Caminho para uma foto',
        	'link_ticket' => 'Link para um ticket a ser vendido online', 
        	'user_id' => 1
        	]);

        DB::table('posts')->insert([
        	'title' => 'Marília mendonça',
        	'text' => 'Algum texto aqui a ser escrito aqui',
        	'photo' => 'Caminho para uma foto',
        	'link_ticket' => 'Link para um ticket a ser vendido online', 
        	'user_id' => 2
        	]);
    }
}
