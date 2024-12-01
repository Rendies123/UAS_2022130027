@extends('layouts.app')
@section('content')
    <h1>{{ $deck->name }}</h1>
    <p>Deck ID: {{ $deck->id }}</p>
    <a href="{{ route('decks.edit', $deck->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('decks.destroy', $deck->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('decks.index') }}" class="btn btn-secondary">Back to Decks</a>
@endsection
