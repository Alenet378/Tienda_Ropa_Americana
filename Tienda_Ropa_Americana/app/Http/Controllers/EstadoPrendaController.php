<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoPrenda;

class EstadoPrendaController extends Controller
{
    public function index()
    {
        $estadoprenda = EstadoPrenda::latest()->paginate(10);
        return view('estadoprenda.index', compact('estadoprenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estadoprenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        EstadoPrenda::create($request->all());
        return redirect()->route('estadoprenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(EstadoPrenda $estadoprenda)
    {
        return redirect()->route('estadoprenda.edit', $estadoprenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstadoPrenda $estadoprenda)
    {
        return view('estadoprenda.edit', compact('estadoprenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EstadoPrenda $estadoprenda)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        $estadoprenda->update($request->all());
        return redirect()->route('estadoprenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstadoPrenda $estadoprenda)
    {
        $estadoprenda->delete();
        return redirect()->route('estadoprenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
