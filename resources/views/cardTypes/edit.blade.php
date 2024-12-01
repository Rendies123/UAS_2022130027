@extends('layouts.app')
@section('content')
    <h1>Edit Card Type</h1>
    <form method="POST" action="{{ route('card_types.update', $cardType->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type_name" class="form-label">Card Type Name</label>
            <input type="text" class="form-control" id="type_name" name="type_name" value="{{ $cardType->type_name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
