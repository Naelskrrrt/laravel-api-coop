<?php

// Fichier: database/factories/VoitureFactory.php

namespace Database\Factories;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_voiture' => $this->faker->word, // Faker pour un mot aléatoire
            'nb_place' => $this->faker->numberBetween(2, 8), // Faker pour un nombre aléatoire entre 2 et 8
            'statut' => $this->faker->randomElement(['disponible', 'en maintenance', 'réservé']), // Faker pour un élément aléatoire d'un tableau
        ];
    }
}
