<?php

namespace App\Http\Controllers;

use App\Models\CardType;
use App\Models\Card;
use Illuminate\Http\Request;


class CardTypeController extends Controller
{
    public function index()
    {
        $cardTypes = CardType::all();
        return view('cardTypes.index', compact('cardTypes'));
    }

    public function create()
    {
        return view('cardTypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required',
        ]);
        CardType::create($request->only(['type_name']));
        return redirect()->route('card_types.index'); // Updated route name
    }

    public function show($id)
    {
        // Find the card type
        $cardType = CardType::findOrFail($id);

        // Get all cards of this type
        $cards = Card::where('type_id', $id)->get();

        return view('cardTypes.show', compact('cardType', 'cards'));
    }

    public function edit($id)
    {
        $cardType = CardType::findOrFail($id);
        return view('cardTypes.edit', compact('cardType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type_name' => 'required',
        ]);
        CardType::findOrFail($id)->update($request->only(['type_name']));
        return redirect()->route('card_types.index'); // Updated route name
    }

    public function getCardsByType($typeId)
    {
        $cardType = CardType::findOrFail($typeId);
        $cards = Card::where('type_id', $typeId)->get();

        return view('cardTypes.cards', compact('cardType', 'cards'));
    }

    public function destroy($id)
    {
        CardType::findOrFail($id)->delete();
        return redirect()->route('card_types.index'); // Updated route name
    }
}
