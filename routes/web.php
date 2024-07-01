<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//VideogameController

//Create
Route::get('/videogames/create', [VideogameController::class, 'create'])->name('videogames.create');

//Store
Route::post('/videogames/store', [VideogameController::class, 'store'])->name('videogames.store');

//Index
Route::get('/videogames/index', [VideogameController::class, 'index'])->name('videogames.index');

//Show (Rotta parametrica per ognuno dei giochi)
Route::get('/videogames/show/{videogame}', [VideogameController::class, 'show'])->name('videogames.show');

//Edit
Route::get('/videogames/edit/{videogame}', [VideogameController::class, 'edit'])->name('videogames.edit');

//Update
Route::put('/videogames/update/{videogame}', [VideogameController::class, 'update'])->name('videogames.update');

//Delete
Route::delete('/videogames/destroy/{videogame}', [VideogameController::class, 'destroy'])->name('videogames.destroy');