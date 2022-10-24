<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseController
};

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/', function(){
    return response()->json(['message' => 'ok']);
});