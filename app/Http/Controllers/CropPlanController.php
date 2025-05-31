<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Models\CropPlan;
use App\Models\Crop;
use App\Models\Field;
use Illuminate\Support\Facades\Mail;


class CropPlanController extends Controller
{
    public function create()
    {
        $fields = Field::all();
        $crops = Crop::all();
       Mail::to('example@example.com')->send(new TestEmail());
        return view('crop_plans.create', compact('fields', 'crops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'field_id' => 'required|exists:fields,id',
            'crop_type_id' => 'required|exists:crops,id',
            'planting_date' => 'required|date',
            'harvest_date' => 'required|date|after:planting_date',
            'estimated_yield' => 'required|numeric|min:0.1',
        ]);

        CropPlan::create([
            'field_id' => $request->field_id,
            'crop_type_id' => $request->crop_type_id,
            'planting_date' => $request->planting_date,
            'harvest_date' => $request->harvest_date,
            'estimated_yield' => $request->estimated_yield,
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('crop-plans.index')->with('success', 'Crop plan created successfully.');
    }

}
