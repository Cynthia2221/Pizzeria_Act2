<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzeria Home</title>
    <link rel="stylesheet" href="{{asset('home.css')}}">
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1 class="title">Welcome to the Best Pizzeria!</h1>
        </div>
    </header>
    
    <section class="content">
        <p>Order the tastiest pizzas in town with fresh ingredients and fast delivery!</p>
        <button class="order-button"><a href="{{ route('pizzas.index') }}">Order Now</a></button>
    </section>

    <footer>
        <p>&copy; 2024 Pizzeria. All rights reserved.</p>
    </footer>
</body>
</html>
