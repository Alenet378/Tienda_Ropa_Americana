<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = Carrito::latest()->paginate(10);
        return view('carrito.index', compact('carrito'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carrito.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'created_at' => 'nullable|date',   
        ]);

        Carrito::create($request->all());
        return redirect()->route('carrito.index')->with('success', '¡Carrito registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        return redirect()->route('carrito.edit', $carrito);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        return view('carrito.edit', compact('carrito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'created_at' => 'nullable|date',
        ]);

        $carrito->update($request->all());
        return redirect()->route('carrito.index')->with('success', '¡Carrito actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
        return redirect()->route('carrito.index')->with('success', '¡Carrito eliminado del inventario!');

    }
}
