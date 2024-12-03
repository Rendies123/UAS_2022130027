@extends('layouts.app')

@section('title', 'Cards')

@section('content')
<div class="container">
    <h1>Cards</h1>
    <a href="{{ route('cards.create') }}" class="btn btn-primary mb-3">Create Card</a>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($cards as $card)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ Storage::URL('' . $card->photo) ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $card->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $card->name }}</h5>
                    <p class="card-text">Type: {{ $card->type}}</p>
                    <p class="card-text">Attribute: {{ $card->attribute ?? 'N/A' }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('cards.show', $card->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('cards.destroy', $card->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
