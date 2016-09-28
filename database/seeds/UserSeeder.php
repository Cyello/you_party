<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert(
        	['name' => 'João', 'gender' => 'male', 'state' => 'CE', 'city' => 'GBA', 'address' => 'Limoeiro',
     'photo' => '', 'email' => 'sss', 'date_birth' => Carbon::now(), 'phone' => '9999999', 'password' => '1211']);
    }
}

