<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Form33Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        
        for ($i=1 ; $i <=9 ; $i++) { 
            
            DB::table('form_33s')->insert(
                [
                'location'=>$faker->sentence(1),
                'chairman_id'=>1,
                'invitation_1'=>2,
                'invitation_2'=>3,
                'form_31_id'=>$i,
                'created_at'=> now(),
                ]
            );
        }  
    }
}
