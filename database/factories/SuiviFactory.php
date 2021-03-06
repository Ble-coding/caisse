<?php

namespace Database\Factories;

use App\Models\Suivi;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuiviFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suivi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'libelle' => $this->faker->sentence(),
            'entree' => $this->faker->randomNumber(),
            'sortie' => $this->faker->randomNumber(),
        ];
    }
}
