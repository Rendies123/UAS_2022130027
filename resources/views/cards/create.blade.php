@extends('layouts.app')
@section('content')
    <h1>Create Card</h1>
    <form method="POST" action="{{ route('cards.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Card Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Card Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
