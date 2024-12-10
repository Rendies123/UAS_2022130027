@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $cardType->type_name }} Cards</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $card)
            <tr>
                <td>{{ $card->name }}</td>
                <td>{{ $card->description }}</td>
                <td>
                    <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
