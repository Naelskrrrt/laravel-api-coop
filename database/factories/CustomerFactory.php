<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom_client" => $this->faker->name(),
            "adresse_client" => $this->faker->streetAddress(),
            "phone_client" => $this->faker->phoneNumber(),
            "email_client" => $this->faker->safeEmail(),


        ];
    }
}
