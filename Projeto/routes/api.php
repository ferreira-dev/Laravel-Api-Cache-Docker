<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseController
};

Route::get('/courses/{identify}', [CourseController::class, 'show']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);

Route::get('/', function(){
    return response()->json(['message' => 'ok']);
});