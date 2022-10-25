<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseController,
    ModuleController
};

Route::get('/', function(){
    return response()->json(['message' => 'ok']);
});

Route::get('/courses/{identify}', [CourseController::class, 'show']);
Route::put('/courses/{course}', [CourseController::class, 'update']);
Route::delete('/courses/{identify}', [CourseController::class, 'destroy']);

Route::get('/courses', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store']);

Route::apiResource('/courses/{course}/modules', ModuleController::class);
//api respource facilita o acesso aos métodos do verbo http?
//talvez mas é necessário apontar o método
