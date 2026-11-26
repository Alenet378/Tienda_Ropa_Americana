<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condicion;

class CondicionController extends Controller
{
    public function index()
    {
        $condicion = Condicion::latest()->paginate(10);
        return view('condicion.index', compact('condicion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('condicion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',   
        ]);

        Condicion::create($request->all());
        return redirect()->route('condicion.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Condicion $condicion)
    {
        return redirect()->route('condicion.edit', $condicion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condicion $condicion)
    {
        return view('condicion.edit', compact('condicion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condicion $condicion)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        $condicion->update($request->all());
        return redirect()->route('condicion.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condicion $condicion)
    {
        $condicion->delete();
        return redirect()->route('condicion.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
