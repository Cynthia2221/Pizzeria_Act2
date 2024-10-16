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


    public function edit($id)
    {
        $pizza= Pizza::find($id);

        if(!$pizza){
            return redirect()->route('pizzas.index')->with('error', 'Pizza not found');
        }
    
        return view('pizzas.edit', compact('pizza'));
    }

    public function update(Request $request, $id)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'telephone' => 'required|string|max:20',
    ]);

    $pizza = Pizza::find($id);

    if (!$pizza) {
        return redirect()->route('pizzas.index')->with('error', 'Pizza not found');
    }

    $pizza->name = $request->input('name');
    $pizza->address = $request->input('address');
    $pizza->telephone = $request->input('telephone');
    
    $pizza->save();

    return redirect()->route('pizzas.index')->with('success', 'Pizza update correctly');
}

    public function show($id)
    {
    $pizza = Pizza::find($id);

    if (!$pizza) {
        return redirect()->route('pizzas.index')->with('error', 'Pizza not found');
    }

      return view('pizzas.show', compact('pizza'));
    }

    public function destroy($id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {
            return redirect()->route('pizzas.index')->with('error', 'Pizza not found');
        }

        $pizza->delete();

        return redirect()->route('pizzas.index')->with('success', 'Pizza delet correctly');
    }

}
