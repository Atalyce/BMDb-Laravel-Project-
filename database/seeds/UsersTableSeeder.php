<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'willy',
            'email' => 'willy@gmail.com',
            'password' => bcrypt('12345678'),
            'role'=> 0,
            'gender'=> 'Male',
            'address'=> 'Jakarta Garden City',
            'dob'=>Carbon\Carbon::now(),
            'picture'=>'picture4.png',
        ]);

        DB::table('users')->insert([
            'name' => 'cynthia',
            'email' => 'cynthia@gmail.com',
            'password' => bcrypt('12345678'),
            'role'=> 1,
            'gender'=> 'Female',
            'address'=> 'Pulo Gebang',
            'dob'=>Carbon\Carbon::now(),
            'picture'=>'picture4.png',
        ]);
    }
}
