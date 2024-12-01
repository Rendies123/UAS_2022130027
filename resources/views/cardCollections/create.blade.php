@extends('layouts.app')
@section('content')
    <h1>Create Card Collection</h1>
    <form method="POST" action="{{ route('card_collections.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Card Collection Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
