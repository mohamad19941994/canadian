<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class LandingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'type' => fake()->randomElement(['skin-shows', 'laser-shows', 'nutrition-offers', 'dental-shows', 'skin-offers', 'surgery-offers', 'dr-ahmad']),
            'service' => fake()->randomElement(['skin_shows_1', 'skin_shows_2', 'surgery_offers_1', 'surgery_offers_2', 'dr_ahmad_1', 'dr_ahmad_2', 'dental_shows_1', 'dental_shows_2', 'dental_shows_3', 'dental_shows_4', 'dental_shows_5']),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    /*public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }*/
}
