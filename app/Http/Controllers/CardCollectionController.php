<?php

// app/Http/Controllers/CardCollectionController.php
namespace App\Http\Controllers;

use App\Models\CardCollection;
use Illuminate\Http\Request;

class CardCollectionController extends Controller
{
    public function index()
    {
        $cardCollections = CardCollection::all();
        return view('cardCollections.index', compact('cardCollections'));
    }

    public function create()
    {
        return view('cardCollections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deck_id' => 'required',
            'card_id' => 'required',
        ]);
        CardCollection::create($request->all());
        return redirect()->route('cardCollections.index');
    }

    public function show($id)
    {
        $cardCollection = CardCollection::findOrFail($id);
        return view('cardCollections.show', compact('cardCollection'));
    }

    public function edit($id)
    {
        $cardCollection = CardCollection::findOrFail($id);
        return view('cardCollections.edit', compact('cardCollection'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'deck_id' => 'required',
            'card_id' => 'required',
        ]);
        CardCollection::findOrFail($id)->update($request->all());
        return redirect()->route('cardCollections.index');
    }

    public function destroy($id)
    {
        CardCollection::findOrFail($id)->delete();
        return redirect()->route('cardCollections.index');
    }
}

