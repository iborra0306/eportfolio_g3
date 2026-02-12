<?php

namespace Database\Factories;

use App\Models\FamiliaProfesional;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\Feature\Api\FamiliaProfesionalApiTest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CicloFormativo>
 */
class CicloFormativoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'codigo' => fake()->unique()->text(50),
            'grado' => fake()->randomElement(['básico', 'medio', 'superior']),
            'descripcion' => fake()->text(200),
            'familia_profesional_id' => FamiliaProfesional::factory(),
        ];
    }
}
