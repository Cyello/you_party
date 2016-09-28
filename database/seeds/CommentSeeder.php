<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
 */
    public function run() {
        DB::table('comments')->insert([
        	'text' => 'Algum texto aqui a ser escrito aqui',
        	'user_id' => 1,
        	'post_id' => 2
        	]);
        
        DB::table('comments')->insert([
        	'text' => 'Algum texto aqui a ser escrito aqui',
        	'user_id' => 2,
        	'post_id' => 1
        	]);

        DB::table('comments')->insert([
        	'text' => 'Algum texto aqui a ser escrito aqui',
        	'user_id' => 3,
        	'post_id' => 3
        	]);
    }
}
