<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas= Pizza::all();
        return view('pizzas.index', compact('pizzas'));
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        $pizza= new Pizza;
        $pizza->name= $request->input('name');
        $pizza->address= $request->input('address');
        $pizza->telephone= $request->input('telephone');
        $pizza->save();

        return redirect()->route('pizzas.index');
    }
}
