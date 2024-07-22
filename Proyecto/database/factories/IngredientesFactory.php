<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredientes>
 */
class IngredientesFactory extends Factory
{
    protected $model = \App\Models\Ingredientes::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->word,
            'descripcion'=> $this->faker->sentence,
            'cantidad'=> $this-> faker->numberBetween(1, 100),
        ];
    }
}
