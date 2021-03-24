<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class test_seeder_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 
    public function run()
    {
        DB::table('Users')->insert(
            [
            [
                'name_surname' => 'test name_surname',
                'email' => 'test_auth0@gmail.com',
                'authority'=> 0, 
                'password' => bcrypt(123),
                'remember_token' =>Str::random(10),
                'api_token' => Str::random(10),
                'department_id'=> 1,
                
            ],
            [
                'name_surname' => 'test name_surname',
                'email' => 'test_auth1@gmail.com',
                'authority'=> 1, 
                'password' => bcrypt(123),
                'remember_token' => Str::random(10),
                'api_token' => Str::random(10),
                'department_id'=> 1,

            ],
            [
                'name_surname' => 'test name_surname',
                'email' => 'test_auth2@gmail.com',
                'authority'=> 2, 
                'password' => bcrypt(123),
                'remember_token' => Str::random(10),
                'api_token' => Str::random(10),
                'department_id'=> 1,

            ] 
            ]        

        );
    }
}