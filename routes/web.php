<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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

Route::get('/', [CardController::class, 'index'])->name('index');
//Get create
Route::get('/cards/create', [CardController::class, 'create'])->name('cards.create');

Route::get('/cards/{id}', [CardController::class, 'show'])->name('cards.show');

Route::get('/cards/{id}/edit', [CardController::class, 'edit'])->name('cards.edit');

Route::put('/cards/{id}', [CardController::class, 'update'])->name('cards.update');
