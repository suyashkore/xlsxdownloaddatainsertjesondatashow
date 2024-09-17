<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonDataController;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/show-names', [JsonDataController::class, 'showNames']);
Route::get('/demo-form', [DemoController::class, 'showForm']);
Route::post('/submit-form', [DemoController::class, 'submitForm']);
Route::get('/export', [DemoController::class, 'exportSimple'])->name('export.simple');
