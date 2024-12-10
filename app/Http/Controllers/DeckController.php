<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use App\Models\Card;
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
        $deck = Deck::findOrFail($id);

        // Get all cards in the deck
        $deckCards = $deck->cards()->with('cardType')->get();

        $allCards = Card::all();

        // Get view-only cards
        $viewOnlyCards = $deck->cards()->where('is_view_only', true)->get();

        return view('decks.show', compact('deck', 'deckCards', 'allCards', 'viewOnlyCards'));
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

    public function addCard(Request $request, $deckId)
        {
            $request->validate([
                'card_id' => 'required|exists:cards,id',
                'is_view_only' => 'boolean'
            ]);

            $card = Card::findOrFail($request->card_id);
            $deck = Deck::findOrFail($deckId);

            // Attach the card with optional view-only status
            $deck->cards()->attach($card->id);

            return redirect()->route('decks.show', $deckId)
                ->with('success', 'Card added to deck successfully.');
        }
        public function removeCard(Deck $deck, Card $card)
        {
            // Use route model binding to automatically find the deck and card
            $deck->cards()->detach($card->id);

            return redirect()->route('decks.show', $deck->id)
                ->with('success', 'Card removed from deck successfully.');
        }
}
