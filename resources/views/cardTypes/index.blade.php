@extends('layouts.app')
@section('content')
    <h1>Card Types</h1>
    <a href="{{ route('card_types.create') }}" class="btn btn-primary">Create Card Type</a>
    <ul>
        @foreach ($cardTypes as $cardType)
            <li>{{ $cardType->type_name }} - 
                <a href="{{ route('card_types.show', $cardType->id) }}">View</a> | 
                <a href="{{ route('card_types.edit', $cardType->id) }}">Edit</a> | 
                <form action="{{ route('card_types.destroy', $cardType->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
