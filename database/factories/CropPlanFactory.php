<?php

namespace Database\Factories;

use App\Models\Crop;
use App\Models\CropPlan;
use App\Models\Field;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CropPlan>
 */
class CropPlanFactory extends Factory
{
    protected $model = CropPlan::class;

    public function definition(): array
    {
        $plantingDate = fake()->dateTimeBetween('-1 month', '+1 month');
        $harvestDate = (clone $plantingDate)->modify('+3 months');

        return [
            'field_id' => Field::factory(),
            'crop_type_id' => Crop::factory(),
            'planting_date' => $plantingDate->format('Y-m-d'),
            'harvest_date' => $harvestDate->format('Y-m-d'),
            'estimated_yield' => fake()->randomFloat(2, 1, 100), // tons
            'created_by' => User::factory(),
        ];
    }
}
