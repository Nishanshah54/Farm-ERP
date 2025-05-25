<?php

use App\Http\Controllers\CropPlanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest-home-page');
})->name('test');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/crop-plans/create', [CropPlanController::class, 'create'])->name('crop-plans.create');
    Route::post('/crop-plans', [CropPlanController::class, 'store'])->name('crop-plans.store');
});
