<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseController
};

Route::get('/courses/{identify}', [CourseController::class, 'show']);
Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::delete('/courses/{identify}', [CourseController::class, 'destroy']);

Route::get('/courses', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store']);

Route::get('/', function(){
    return response()->json(['message' => 'ok']);
});