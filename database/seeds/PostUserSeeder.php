<?php

use Illuminate\Database\Seeder;

class PostUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('post_user')->insert([
        	'user_id' => 1,
        	'post_id' => 2
        	]);
        
    }
}
