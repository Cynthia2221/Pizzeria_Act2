<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of the Pizza</title>
</head>
<body>
    <h1>Details of the Pizza</h1>

    <p><strong>Name:</strong> {{ $pizza->name }}</p>
    <p><strong>Address:</strong> {{ $pizza->address }}</p>
    <p><strong>Telephone:</strong> {{ $pizza->telephone }}</p>

    <button><a href="{{ route('pizzas.index') }}">Back to the list</a></button>

    <button><a href="{{ route('pizzas.edit', $pizza->id) }}">Edit Pizza</a></button>
</body>
</html>
