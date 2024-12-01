@extends('layouts.app')
@section('content')
    <h1>Decks</h1>
    <a href="{{ route('decks.create') }}" class="btn btn-primary">Create Deck</a>
    <ul>
        @foreach ($decks as $deck)
            <li>{{ $deck->name }} - <a href="{{ route('decks.show', $deck->id) }}">View</a></li>
        @endforeach
    </ul>
@endsection
