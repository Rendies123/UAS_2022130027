@extends('layouts.app')
@section('content')
    <h1>Edit Deck</h1>
    <form method="POST" action="{{ route('decks.update', $deck->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Deck Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $deck->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
