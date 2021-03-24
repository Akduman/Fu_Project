<?php

namespace Database\Factories;

use App\Models\Form_30;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Form_30Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Form_30::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_surname' => $this->faker->name,
            'student_no' => mt_rand(100000,999999),
            'department_id'=> mt_rand(1,9),
            'sub_department'=> 'test sub department ' . mt_rand(0,1000),
            'advisor_id'=> mt_rand(1,9),
            'tr_title'=> $this->faker->sentence(1), 
            'en_title'=> $this->faker->sentence(1), 
            'language' =>mt_rand(0,1), 
            'exp'=>mt_rand(0,1), 
            'teo'=>mt_rand(0,1), 
            'sim'=>mt_rand(0,1), 
            'sys_dev'=>mt_rand(0,1), 
            'analys'=>mt_rand(0,1), 
            'industrial_sector'=> 'test industrial sector ' . mt_rand(0,1000),
            'permission_1'=>mt_rand(0,1), 
            'permission_2'=>mt_rand(0,1),
            'permission_3'=>mt_rand(0,1),
            'form_32'=>mt_rand(0,1),
            'token' => Str::random(10),
            'created_at'=> now(),
        ];
    }
}
