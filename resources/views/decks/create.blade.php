<!-- resources/views/decks/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Deck</title>
</head>
<body>
    <h1>Create a New Deck</h1>

    <form action="{{ route('decks.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Deck Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" required>
        </div>
        <button type="submit">Create Deck</button>
    </form>
</body>
</html>
