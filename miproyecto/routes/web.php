<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TicketLinesController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TicketsController;  

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

// USERS
Route::get('/users/add', function() {return view('users.form'); })->name('users-add');
Route::post('users/add', [UsersController::class, 'store'])->name('users-store');  
Route::get('/users', [UsersController::class, 'index'])->name('users-index'); 
Route::post('/users', [UsersController::class, 'filter'])->name('users-filter');
Route::get('/users/order/{opt}', [UsersController::class, 'indexBy'])->name('users-index-order'); 
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users-delete'); 
Route::get('/users/{id}', [UsersController::class, 'show'])->name('users-edit'); 
Route::patch('/users/{id}', [UsersController::class, 'update'])->name('users-update'); 



Route::get('/ticketlines/add', function() { return view('ticketlines.form'); })->name('ticketlines-add');
Route::post('ticketlines/add', [TicketLinesController::class, 'store'])->name('ticketlines-store');  
Route::get('/ticketlines', [TicketLinesController::class, 'index'])->name('ticketlines-index');

Route::delete('/ticketlines/{id}', [TicketLinesController::class, 'destroy'])->name('ticketlines-delete'); 
Route::get('/ticketlines/{id}', [TicketLinesController::class, 'show'])->name('ticketlines-edit'); 
Route::patch('/ticketlines/{id}', [TicketLinesController::class, 'update'])->name('ticketlines-update'); 


Route::get('/games/add', function() { return view('games.form'); })->name('games-add');
Route::post('games/add', [GameController::class, 'store'])->name('games-store');  
Route::get('/games', [GameController::class, 'index'])->name('games-index');

Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('games-delete'); 
Route::get('/games/{id}', [GameController::class, 'show'])->name('games-edit'); 
Route::patch('/games/{id}', [GameController::class, 'update'])->name('games-update'); 
Route::patch('/ticketlines/{id}', [TicketLinesController::class, 'update'])->name('ticketlines-update');

Route::get("/tickets", [TicketsController::class, 'index'])->name('tickets-index'); 
Route::delete('/tickets/{id}', [TicketsController::class, 'destroy'])->name('tickets-delete');
Route::get('/tickets/{id}', [TicketsController::class, 'show'])->name('tickets-edit');  
