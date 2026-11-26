<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenItem;

class OrdenItemController extends Controller
{
    public function index()
    {
        $ordenitem = OrdenItem::latest()->paginate(10);
        return view('ordenitem.index', compact('ordenitem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordenitem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'orden_id' => 'nullable|integer',
            'prenda_id' => 'nullable|integer',
            'precio' => 'nullable|numeric',
        ]);

        OrdenItem::create($request->all());
        return redirect()->route('ordenitem.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(OrdenItem $ordenitem)
    {
        return redirect()->route('ordenitem.edit', $ordenitem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrdenItem $ordenitem)
    {
        return view('ordenitem.edit', compact('ordenitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrdenItem $ordenitem)
    {
        $request->validate([
            'orden_id' => 'nullable|integer',
            'prenda_id' => 'nullable|integer',
            'precio' => 'nullable|numeric',
        ]);

        $ordenitem->update($request->all());
        return redirect()->route('ordenitem.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrdenItem $ordenitem)
    {
        $ordenitem->delete();
        return redirect()->route('ordenitem.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
