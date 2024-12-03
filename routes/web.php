<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\CardCollectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeckCardController;

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
    return view('welcome');
});

// Resource routes for CRUD operations
Route::resource('decks', DeckController::class);
Route::resource('cards', CardController::class);
Route::resource('card_types', CardTypeController::class);
Route::resource('cards_collection', CardCollectionController::class);
Route::resource('deck_cards', DeckCardController::class);
Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
