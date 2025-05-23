<?php

namespace Database\Factories;

use App\Models\Crop;
use Illuminate\Database\Eloquent\Factories\Factory;

class CropFactory extends Factory
{

    protected  $model=Crop::class;

    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'variety'=>fake()->optional()->word(),
            'growth_duration'=>fake()->optional()->randomElement(['90 days','120 days','150 days']),
        ];
    }
}
