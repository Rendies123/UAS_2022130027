@extends('layouts.app')
@section('content')
    <h1>Edit Card</h1>
    <form method="POST" action="{{ route('cards.update', $card->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Card Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $card->name }}" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Card Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $card->type }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $card->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
