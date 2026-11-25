<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function index()
    {
        $factura = Factura::latest()->paginate(10);
        return view('factura.index', compact('factura'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'orden_id' => 'nullable|integer',
            'cai_id' => 'nullable|integer',
            'numero' => 'nullable|string|max:19',
            'rtn_cliente' => 'nullable|string|max:14',
            'nombre_cliente' => 'nullable|string|max:255',
            'importe_gravado' => 'nullable|numeric',
            'importe_excento' => 'nullable|numeric',
            'isv_15' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'estado' => 'nullable|string|max:20',
            'fecha_emision' => 'nullable|date',
        ]);

        Factura::create($request->all());
        return redirect()->route('factura.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {
        return redirect()->route('factura.edit', $factura);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura)
    {
        return view('factura.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $factura)
    {
        $request->validate([
            'orden_id' => 'nullable|integer',
            'cai_id' => 'nullable|integer',
            'numero' => 'nullable|string|max:19',
            'rtn_cliente' => 'nullable|string|max:14',
            'nombre_cliente' => 'nullable|string|max:255',
            'importe_gravado' => 'nullable|numeric',
            'importe_excento' => 'nullable|numeric',
            'isv_15' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'estado' => 'nullable|string|max:20',
            'fecha_emision' => 'nullable|date',
        ]);

        $factura->update($request->all());
        return redirect()->route('factura.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('factura.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
