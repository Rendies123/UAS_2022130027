<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\CardCollectionController;
use App\Http\Controllers\UserController;

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

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Resource routes for CRUD operations
Route::resource('decks', DeckController::class);
Route::resource('cards', CardController::class);
Route::resource('card_types', CardTypeController::class);
Route::resource('card_collections', CardCollectionController::class);
Route::resource('users', UserController::class);

// Route for adding a card to a deck
Route::post('/decks/{deck}/add-card', [DeckController::class, 'addCard'])->name('decks.addCard');

// Route for deck cards
Route::get('/deck-cards', [DeckController::class, 'index'])->name('deck_cards.index'); // Adjust the controller and method accordingly

// Authentication routes
Auth::routes();

// Home route after login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
