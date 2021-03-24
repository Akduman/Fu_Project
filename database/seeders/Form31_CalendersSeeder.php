<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Form31_CalendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($j=1; $j <=5; $j++) { 
            for ($i=1 ; $i <=9 ; $i++) { 
                DB::table('form_31_calendars')->insert(
                    [
                        'packed'=> $faker->sentence(5),
                        'begin'=>mt_rand(1,12),
                        'end'=>mt_rand(1,12),
                        'form_31_id'=> $i,
                    ]);
            }    
        }
        

    }
}
