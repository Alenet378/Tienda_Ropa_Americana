<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacturaDetalle;

class FacturaDetalleController extends Controller
{
    public function index()
    {
        $facturadetalle = FacturaDetalle::latest()->paginate(10);
        return view('facturadetalle.index', compact('facturadetalle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facturadetalle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'factura_id' => 'nullable|integer',
            'prenda_id' => 'nullable|integer',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'nullable|numeric',
        ]);

        FacturaDetalle::create($request->all());
        return redirect()->route('facturadetalle.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(FacturaDetalle $facturadetalle)
    {
        return redirect()->route('facturadetalle.edit', $facturadetalle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacturaDetalle $facturadetalle)
    {
        return view('facturadetalle.edit', compact('facturadetalle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FacturaDetalle $facturadetalle)
    {
        $request->validate([
            'factura_id' => 'nullable|integer',
            'prenda_id' => 'nullable|integer',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'nullable|numeric',
        ]);

        $facturadetalle->update($request->all());
        return redirect()->route('facturadetalle.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FacturaDetalle $facturadetalle)
    {
        $facturadetalle->delete();
        return redirect()->route('facturadetalle.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
