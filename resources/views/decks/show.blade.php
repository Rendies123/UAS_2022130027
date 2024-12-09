@extends('layouts.app')

@section('content')
    <h1>{{ $deck->name }}</h1>
    <p>Deck ID: {{ $deck->id }}</p>

    <!-- Edit and Delete Buttons -->
    <a href="{{ route('decks.edit', $deck->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('decks.destroy', $deck->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('decks.index') }}" class="btn btn-secondary">Back to Decks</a>

    <!-- Add Card to Deck Form -->
    <h2>Add Card to Deck</h2>
    <form action="{{ route('decks.addCard', $deck->id) }}" method="POST">
        @csrf
        <label for="card_id">Select Card:</label>
        <select name="card_id" id="card_id" required>
            @foreach($cards as $card)
                <option value="{{ $card->id }}">{{ $card->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Add Card</button>
    </form>

    <!-- List of Cards in Deck -->
    <h2>Cards in Deck</h2>
    @if($deck->cards->count() > 0)
        <ul>
            @foreach($deck->cards as $card)
                <li>{{ $card->name }}</li>
            @endforeach
        </ul>
    @else
        <p>No cards in this deck yet.</p>
    @endif
@endsection
