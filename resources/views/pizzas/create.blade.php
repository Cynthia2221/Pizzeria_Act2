{{-- @extends('layout') --}}

@section('content')
<h1>Add a new order</h1>
<form method="POST" action="{{ route('pizzas.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter pizza name">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
    </div>
    <div class="form-group">
        <label for="telephone">Telephone</label>
        <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Enter your telephone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<button><a href="{{ route('pizzas.index') }}">Back to the list</a></button>