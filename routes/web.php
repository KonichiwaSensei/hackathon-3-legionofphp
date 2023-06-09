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

// General routes:
Route::get('/animals/{animal_id}', [AnimalController::class, 'show'])->name('animal');
Route::get('/owners/{owner_id}', [OwnerController::class, 'show'])->name('owner');
Route::get('/', [SearchController::class, 'search'])->name('search');
Route::view('/form', 'form');

// Animal form routes:
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals/{animal_id}', [AnimalController::class, 'create'])->name('animals.store');
Route::get('/animals/edit/{animal_id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animals/update/{animal_id}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/delete/{animal_id}', [AnimalController::class, 'delete'])->name('animals.delete');

// Owner form routes:
Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
Route::post('/owners/{owner_id}', [OwnerController::class, 'create'])->name('owners.store');
Route::get('/owners/edit/{owner_id}', [OwnerController::class, 'edit'])->name('owners.edit');
Route::put('/owners/update/{owner_id}', [OwnerController::class, 'update'])->name('owners.update');
Route::delete('/owners/delete/{owner_id}', [OwnerController::class, 'delete'])->name('owners.delete');