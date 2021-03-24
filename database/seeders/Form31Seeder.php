<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator;
class Form31Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();

        DB::table('Form_31s')->insert(
            [
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '1',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '2',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '3',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '4',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '5',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '6',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '7',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '8',
                ],
                [
                    'program' =>mt_rand(0,2),
                    'purpose' => $faker->sentence(5),

                    'requirement_1'=>$faker->sentence(5),
                    'requirement_2'=>$faker->sentence(5),//max 200 kelime
                    'requirement_3'=>$faker->sentence(5),//max 200 kelime

                    'subject_scope_1'=>$faker->sentence(3),
                    'subject_scope_2'=>$faker->sentence(3),
                    
                    'method'=>$faker->sentence(5),
                    'org_val'=>$faker->sentence(3),
                    'effect'=>$faker->sentence(3),
                    'addicted'=>$faker->sentence(1),
                    
                    'form_30_id' => '9',
                ],                

            ]                             
        );
    }
}