<?php

// app/Http/Controllers/CardController.php
namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);
        Card::create($request->all());
        return redirect()->route('cards.index');
    }

    public function show($id)
    {
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }

    public function edit($id)
    {
        $card = Card::findOrFail($id);
        return view('cards.edit', compact('card'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);
        Card::findOrFail($id)->update($request->all());
        return redirect()->route('cards.index');
    }

    public function destroy($id)
    {
        Card::findOrFail($id)->delete();
        return redirect()->route('cards.index');
    }
}
