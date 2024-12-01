@extends('layouts.app')
@section('content')
    <h1>{{ $cardCollection->name }}</h1>
    <a href="{{ route('card_collections.edit', $cardCollection->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('card_collections.destroy', $cardCollection->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('card_collections.index') }}" class="btn btn-secondary">Back to Card Collections</a>
@endsection
