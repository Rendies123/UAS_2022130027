<?php

namespace App\Http\Controllers;

use App\Models\CardCollection;
use Illuminate\Http\Request;

class CardCollectionController extends Controller
{
    public function index()
    {
        $cardCollections = CardCollection::all();
        return view('cardcollections.index', compact('cardCollections'));
    }

    public function create()
    {
        return view('cardcollections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Added name validation
            'deck_id' => 'required|exists:decks,id',
            'card_id' => 'required|exists:cards,id',
        ]);

        CardCollection::create($request->all());
        return redirect()->route('card_collections.index')
            ->with('success', 'Card Collection created successfully.');
    }

    public function show(CardCollection $cardCollection)
    {
        return view('card_collections.show', compact('cardCollection'));
    }

    public function edit(CardCollection $cardCollection)
    {
        return view('card_collections.edit', compact('cardCollection'));
    }

    public function update(Request $request, CardCollection $cardCollection)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deck_id' => 'required|exists:decks,id',
            'card_id' => 'required|exists:cards,id',
        ]);

        $cardCollection->update($request->all());
        return redirect()->route('card_collections.index')
            ->with('success', 'Card Collection updated successfully.');
    }

    public function destroy(CardCollection $cardCollection)
    {
        $cardCollection->delete();
        return redirect()->route('card_collections.index')
            ->with('success', 'Card Collection deleted successfully.');
    }
}
