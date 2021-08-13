<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $timestamp = rand( strtotime("Jan 01 2021"), strtotime("Dec 01 2021") );

        return [
            'name' => $this->faker->name(),
            'date' => $this->faker->date('Y-m-d', $timestamp),
            'address' => $this->faker->address(),
            'number_phone' => $this->faker->phoneNumber(),
            'purpose' => $this->faker->sentence(mt_rand(2,15)),
        ];
    }
}
