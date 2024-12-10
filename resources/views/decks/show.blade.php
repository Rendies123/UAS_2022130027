@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $deck->name }} Deck</h1>

    <h2>Deck Cards</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>View Only</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deckCards as $card)
            <tr>
                <td>{{ $card->name }}</td>
                <td>{{ $card->cardType->type_name }}</td>
                <td>
                    {{ $card->pivot->is_view_only ? 'Yes' : 'No' }}
                </td>
                <td>
                    @if(!$card->pivot->is_view_only)
                        <form action="{{ route('deck.removeCard', [$deck->id, $card->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    @else
                        <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info">View</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Add Card to Deck</h2>
    <form action="{{ route('decks.addCard', $deck->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="card_id">Select Card</label>
            <select name="card_id" id="card_id" class="form-control">
                @foreach($allCards as $card)
                    <option value="{{ $card->id }}">{{ $card->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" name="is_view_only" id="is_view_only" class="form-check-input">
            <label for="is_view_only" class="form-check-label">View Only</label>
        </div>
        <button type="submit" class="btn btn-primary">Add Card</button>
    </form>
</div>
@endsection
