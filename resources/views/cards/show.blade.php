@extends('layouts.app')
@section('content')
    <h1>{{ $card->name }}</h1>
    <p>Type: {{ $card->type }}</p>
    <p>Description: {{ $card->description }}</p>
    <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('cards.destroy', $card->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('cards.index') }}" class="btn btn-secondary">Back to Cards</a>
@endsection
