<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzeria</title>
</head>
<body>
    <h1>List of pizzas</h1>
    <ul>
        @foreach ($pizzas as $pizza)
            <li>{{ $pizza->name }} {{ $pizza->address }} {{ $pizza->telephone }}
                <button><a href="{{ route('pizzas.edit', $pizza->id) }}">Edit order</a></button>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta pizza?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <button><a href="{{ route('pizzas.create') }}">Create Pizza</a></button>
</body>
</html>
