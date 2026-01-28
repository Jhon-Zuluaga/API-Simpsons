<?php

use App\Http\Controllers\CharactersController;
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

Route::get('/', function () {
    return view('index');
})->name('inicio');

// Ruta de personajes (characters)
Route::prefix('character')->group(function () {
    Route::get('/', [CharactersController::class, 'index'])->name('character.index');
    Route::get('/create', [CharactersController::class, 'create'])->name('character.create');
    Route::post('/', [CharactersController::class, 'store'])->name('character.store');
    Route::get('/edit/{id}', [CharactersController::class, 'edit'])->name('character.edit');
    Route::put('/{id}', [CharactersController::class, 'update'])->name('character.update');
    Route::delete('/{id}', [CharactersController::class, 'destroy'])->name('character.destroy');
});