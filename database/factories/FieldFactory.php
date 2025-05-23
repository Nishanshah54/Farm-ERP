<?php

namespace Database\Factories;

use App\Models\Field;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Field>
 */
class FieldFactory extends Factory
{
    protected $model = Field::class;

    public function definition(): array
    {
        return [
            'name' => 'Field ' . fake()->unique()->numberBetween(1, 100),
            'area' => fake()->randomFloat(2, 1, 100),
            'location' => fake()->city . ', ' . fake()->country,
        ];
    }
}
