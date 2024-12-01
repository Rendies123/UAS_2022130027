@extends('layouts.app')
@section('content')
    <h1>Card Collections</h1>
    <a href="{{ route('card_collections.create') }}" class="btn btn-primary">Create Card Collection</a>
    <ul>
        @foreach ($cardCollections as $cardCollection)
            <li>{{ $cardCollection->name }} - 
                <a href="{{ route('card_collections.show', $cardCollection->id) }}">View</a> | 
                <a href="{{ route('card_collections.edit', $cardCollection->id) }}">Edit</a> | 
                <form action="{{ route('card_collections.destroy', $cardCollection->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
