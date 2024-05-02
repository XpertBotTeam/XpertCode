<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TutorialController;
use App\Http\Controllers\API\ExerciseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [\App\Http\Controllers\API\UserController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\API\UserController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('tutorials/{id}/exercises',[\App\Http\Controllers\API\TutorialController::class,'exercises']);
    Route::resource('tutorials', \App\Http\Controllers\API\TutorialController::class);
    Route::resource('exercises', \App\Http\Controllers\API\ExerciseController::class);

});


