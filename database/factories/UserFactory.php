<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_surname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'authority'=> mt_rand(0,2), 
            'password' => bcrypt(123),
            'remember_token' => Str::random(10),
            'api_token' => Str::random(10),
            'department_id'=> mt_rand(1,9),
            'created_at'=> now()
        ];
    }
}
