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
    // Validación de los datos entrantes
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'telephone' => 'required|string|max:20',
    ]);

    // Buscar la pizza por ID
    $pizza = Pizza::find($id);

    // Comprobar si la pizza existe
    if (!$pizza) {
        return redirect()->route('pizzas.index')->with('error', 'Pizza no encontrada');
    }

    // Actualizar los atributos de la pizza
    $pizza->name = $request->input('name');
    $pizza->address = $request->input('address');
    $pizza->telephone = $request->input('telephone');
    
    // Guardar los cambios en la base de datos
    $pizza->save();

    // Redirigir al índice con un mensaje de éxito
    return redirect()->route('pizzas.index')->with('success', 'Pizza actualizada correctamente');
}

    public function show($id)
    {
    $pizza = Pizza::find($id);

    if (!$pizza) {
        return redirect()->route('pizzas.index')->with('error', 'Pizza no encontrada');
    }

      return view('pizzas.show', compact('pizza'));
    }

    public function destroy($id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {
            return redirect()->route('pizzas.index')->with('error', 'Pizza no encontrada');
        }

        $pizza->delete();

        return redirect()->route('pizzas.index')->with('success', 'Pizza eliminada correctamente');
    }

}
