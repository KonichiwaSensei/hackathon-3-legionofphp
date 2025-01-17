<?php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Animalcontroller;
use App\Http\Controllers\VisitController;

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
Route::get('/animals/{animal_id}', [AnimalController::class, 'show'])->whereNumber('animal_id')->name('animal');
Route::get('/owners/{owner_id}', [OwnerController::class, 'show'])->whereNumber('owner_id')->name('owner');

Route::get('/', [SearchController::class, 'search'])->name('search');

// Animal form routes:
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/edit/{animal_id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animals/update/{animal_id}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/delete/{animal_id}', [AnimalController::class, 'delete'])->name('animals.delete');

// Owner form routes:
Route::get('/owners/create', [OwnerController::class, 'create'])->name('owners.create');
Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
Route::get('/owners/edit/{owner_id}', [OwnerController::class, 'edit'])->name('owners.edit');
Route::put('/owners/update/{owner_id}', [OwnerController::class, 'update'])->name('owners.update');
Route::delete('/owners/delete/{owner_id}', [OwnerController::class, 'delete'])->name('owners.delete');

// Visit form routes:
Route::get('/visits/create/{animal_id}', [VisitController::class, 'create'])->name('visits.create');
Route::post('/visits', [VisitController::class, 'store'])->name('visits.store');
Route::get('/visits/edit/{visit_id}', [VisitController::class, 'edit'])->name('visits.edit');
Route::put('/visits/update/{visit_id}', [VisitController::class, 'update'])->name('visits.update');
Route::delete('/visits/delete/{visit_id}', [VisitController::class, 'delete'])->name('visits.delete');