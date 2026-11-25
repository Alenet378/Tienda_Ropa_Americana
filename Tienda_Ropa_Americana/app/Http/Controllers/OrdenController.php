<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    public function index()
    {
        $orden = Orden::latest()->paginate(10);
        return view('orden.index', compact('orden'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orden.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'nullable|integer',
            'estado' => 'nullable|string|max:20',
            'departamento' => 'nullable|string|max:100',
            'ciudad' => 'nullable|string|max:100',
            'direccion' => 'nullable|string|max:255',
            'subtotal' => 'nullable|numeric',
            'isv' => 'nullable|numeric',
            'flete' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'created_at' => 'nullable|date',
        ]);

        Orden::create($request->all());
        return redirect()->route('orden.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Orden $orden)
    {
        return redirect()->route('orden.edit', $orden);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orden $orden)
    {
        return view('orden.edit', compact('orden'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'cliente_id' => 'nullable|integer',
            'estado' => 'nullable|string|max:20',
            'departamento' => 'nullable|string|max:100',
            'ciudad' => 'nullable|string|max:100',
            'direccion' => 'nullable|string|max:255',
            'subtotal' => 'nullable|numeric',
            'isv' => 'nullable|numeric',
            'flete' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'created_at' => 'nullable|date',
        ]);

        $orden->update($request->all());
        return redirect()->route('orden.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();
        return redirect()->route('orden.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
