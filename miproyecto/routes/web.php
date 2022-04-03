<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/games', [GamesController::class, 'index'])->name('games');
//Route::get('/games', [GamesController::class, 'show'])->name('games');
//Route::path('/games', [GamesController::class, 'update'])->name('games-update');
//Route::delete('/games', [GamesController::class, 'delete'])->name('games-delete');

Route::get('/users/add', function() {return view('users.form'); })->name('users-add');
Route::post('users/add', [UsersController::class, 'store'])->name('users-store');  
Route::get('/users', [UsersController::class, 'index'])->name('users-index'); 
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users-delete'); 