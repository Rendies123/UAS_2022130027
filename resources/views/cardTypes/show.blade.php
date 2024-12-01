@extends('layouts.app')
@section('content')
    <h1>{{ $cardType->type_name }}</h1>
    <a href="{{ route('card_types.edit', $cardType->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('card_types.destroy', $cardType->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('card_types.index') }}" class="btn btn-secondary">Back to Card Types</a>
@endsection
