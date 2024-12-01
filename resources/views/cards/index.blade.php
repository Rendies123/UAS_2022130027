@extends('layouts.app')
@section('content')
    <h1>Cards</h1>
    <a href="{{ route('cards.create') }}" class="btn btn-primary">Create Card</a>
    <ul>
        @foreach ($cards as $card)
            <li>
                {{ $card->name }} - 
                <a href="{{ route('cards.show', $card->id) }}">View</a> | 
                <a href="{{ route('cards.edit', $card->id) }}">Edit</a> | 
                <form action="{{ route('cards.destroy', $card->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
