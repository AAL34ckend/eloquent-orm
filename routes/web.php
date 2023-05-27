<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FilmController::class, 'show']);
Route::get('/insert', [FilmController::class, 'new']);
Route::get('/mass-assignment', [FilmController::class, 'massAssignment']);
Route::get('/mass-assignment2', [FilmController::class, 'massAssignment2']);
Route::get('/update', [FilmController::class, 'update']);
Route::get('/mass-update', [FilmController::class, 'massUpdate']);
Route::get('/delete', [FilmController::class, 'delete']);
Route::get('/mass-delete', [FilmController::class, 'massDelete']);
Route::get('/soft-delete', [FilmController::class, 'softDeletes']);
Route::get('/with-trashed', [FilmController::class, 'withTrashed']);
