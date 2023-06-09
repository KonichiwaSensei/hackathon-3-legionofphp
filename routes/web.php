<?php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Animalcontroller;

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


Route::get('/animals/{animal_id}', [AnimalController::class, 'show'])->name('animal');
Route::get('/owners/{owner_id}', [OwnerController::class, 'show'])->name('owner');
Route::get('/', [SearchController::class, 'search'])->name('search');
