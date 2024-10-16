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
                <button><a href="{{ route('pizzas.edit', $pizza->id) }}">Edit your order</a></button>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure to eliminate your order?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete your order</button>
                </form>
            </li>
        @endforeach
    </ul>

    <div class="button-container">
        <button><a href="{{ route('pizzas.create') }}">Add your order</a></button>
        <button><a href="{{ route('home')}}">Home page</a></button>
    </div>
    
</body>
</html>
