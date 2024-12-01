<?php

// app/Http/Controllers/CardTypeController.php
namespace App\Http\Controllers;

use App\Models\CardType;
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
        CardType::create($request->all());
        return redirect()->route('cardTypes.index');
    }

    public function show($id)
    {
        $cardType = CardType::findOrFail($id);
        return view('cardTypes.show', compact('cardType'));
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
        CardType::findOrFail($id)->update($request->all());
        return redirect()->route('cardTypes.index');
    }

    public function destroy($id)
    {
        CardType::findOrFail($id)->delete();
        return redirect()->route('cardTypes.index');
    }
}

