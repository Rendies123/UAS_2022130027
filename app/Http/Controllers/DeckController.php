<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function index()
    {
        $decks = Deck::all(); // Get all decks
        return view('decks.index', compact('decks')); // Pass the decks to the view
    }

    public function create()
    {
        return view('decks.create'); // Return the view for creating a new deck
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',  // The deck name is required
            'user_id' => 'required',  // The user ID is required
        ]);

        // Create a new deck with the validated data
        Deck::create($request->all());

        // Redirect to the index page after successfully creating a deck
        return redirect()->route('decks.index');
    }

    public function show($id)
    {
        $deck = Deck::findOrFail($id); // Find the deck by ID or fail if not found
        return view('decks.show', compact('deck')); // Pass the deck to the view
    }

    public function edit($id)
    {
        $deck = Deck::findOrFail($id); // Find the deck by ID or fail if not found
        return view('decks.edit', compact('deck')); // Pass the deck to the view for editing
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',  // The deck name is required
        ]);

        // Update the deck with the validated data
        Deck::findOrFail($id)->update($request->all());

        // Redirect to the index page after successfully updating the deck
        return redirect()->route('decks.index');
    }

    public function destroy($id)
    {
        // Find the deck by ID and delete it
        Deck::findOrFail($id)->delete();

        // Redirect to the index page after successfully deleting the deck
        return redirect()->route('decks.index');
    }
}
