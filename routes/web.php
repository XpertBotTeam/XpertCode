<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TutorialController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login');


Route::get('/register', [UserController::class, 'signupForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');


Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/tutorials', [TutorialController::class, 'index'])->name('tutorials');


Route::get('/tutorials/{id}', [TutorialController::class, 'show'])->where('id', '[0-9]+')->name('tutorials.show');

Route::get('/tutorials/create', [TutorialController::class, 'create'])->name('tutorials.create');
Route::post('/tutorials', [TutorialController::class, 'store'])->name('tutorials.store');




// Route for showing the edit tutorial form
Route::get('/tutorials/{id}/edit', [TutorialController::class, 'edit'])->where('id', '[0-9]+')->name('tutorials.edit');

//// Route for updating a tutorial
Route::put('/tutorials/{id}', [TutorialController::class, 'update'])->where('id', '[0-9]+')->name('tutorials.update');

//Route for deleting a tutorial
//Route::delete('/tutorials/{id}', 'TutorialController@destroy')->name('tutorials.destroy');
