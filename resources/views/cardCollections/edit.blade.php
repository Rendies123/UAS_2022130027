@extends('layouts.app')
@section('content')
    <h1>Edit Card Collection</h1>
    <form method="POST" action="{{ route('card_collections.update', $cardCollection->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Card Collection Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $cardCollection->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
