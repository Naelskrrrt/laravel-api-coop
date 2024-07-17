<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Customer;
use App\Models\Voiture;
use App\Models\Admin;


use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => Customer::factory(),
            'id_voiture' => Voiture::factory(),
            'id_admin' => Admin::factory(),
            "nom_client" => $this->faker->name(),
            "adresse_client" => $this->faker->streetAddress(),
            "phone_client" => $this->faker->phoneNumber(),
            "email_client" => $this->faker->safeEmail(),
            'ville_destination' => $this->faker->city,
            'date_depart' => $this->faker->dateTimeBetween('now', '+1 year'),
            'date_reservation' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'nb_pers' => $this->faker->numberBetween(1, 10),

        ];
    }
}
