<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fardo;

class FardoController extends Controller
{
    public function index()
    {
        $fardo = Fardo::latest()->paginate(10);
        return view('fardo.index', compact('fardo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fardo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'proveedor_id' => 'nullable|integer',
            'codigo' => 'nullable|string|max:255',
            'costo_usd' => 'nullable|numeric',
            'tipo_cambio' => 'nullable|numeric',
            'costos_adicionales' => 'nullable|numeric',
            'peso' => 'nullable|numeric',
            'cantidad_estimada' => 'nullable|integer',
            'fecha_llegada' => 'nullable|date',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        Fardo::create($request->all());
        return redirect()->route('fardo.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Fardo $fardo)
    {
        return redirect()->route('fardo.edit', $fardo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fardo $fardo)
    {
        return view('fardo.edit', compact('fardo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fardo $fardo)
    {
        $request->validate([
            'proveedor_id' => 'nullable|integer',
            'codigo' => 'nullable|string|max:255',
            'costo_usd' => 'nullable|numeric',
            'tipo_cambio' => 'nullable|numeric',
            'costos_adicionales' => 'nullable|numeric',
            'peso' => 'nullable|numeric',
            'cantidad_estimada' => 'nullable|integer',
            'fecha_llegada' => 'nullable|date',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $fardo->update($request->all());
        return redirect()->route('fardo.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fardo $fardo)
    {
        $fardo->delete();
        return redirect()->route('fardo.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
