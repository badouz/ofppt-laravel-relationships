<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
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
Route::get("films",[FilmController::class,'index'] );
Route::get("films/create",[FilmController::class,'create']);
Route::post("films/store",[FilmController::class,'store'])->name('films.store');
Route::get('/edit/{id}', 'FilmController@edit')->name('film.edit');
Route::post('/delete/{id}', 'FilmController@destroy')->name('film.destroy');

