<link rel="stylesheet" href="{{ asset('form.css') }}">
<form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ old('name', $pizza->name) }}" required>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ old('address', $pizza->address) }}" required>

    <label for="telephone">Telephone:</label>
    <input type="text" name="telephone" value="{{ old('telephone', $pizza->telephone) }}" required>

    <button type="submit">Update Pizza</button>
</form>

<button><a href="{{ route('pizzas.index') }}">Back to the list</a></button>

