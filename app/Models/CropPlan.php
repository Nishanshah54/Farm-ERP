<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropPlan extends Model
{
    /** @use HasFactory<\Database\Factories\CropPlanFactory> */
    use HasFactory;

    protected $fillable = [
        'field_id',
        'crop_type_id',
        'planting_date',
        'harvest_date',
        'estimated_yield',
        'created_by'
    ];
}
