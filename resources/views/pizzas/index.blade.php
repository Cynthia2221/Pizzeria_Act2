<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzeria</title>
</head>
<body>
    <h1>List of pizzas</h1>
    <ul>
        @foreach ($pizzas as $pizza)
            <li>{{ $pizza->name }} {{ $pizza->address }} {{ $pizza->telephone }}</li>
        @endforeach
    </ul>
</body>
</html>
