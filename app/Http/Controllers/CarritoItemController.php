<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarritoItem;

class CarritoItemController extends Controller
{
    public function index()
    {
        $carrito = CarritoItem::latest()->paginate(10);
        return view('carritoitem.index', compact('carritoitem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carritoitem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'orden_id' => 'required|integer',
            'prenda_id' => 'required|integer',
            'precio' => 'nullable|numeric',   
        ]);

        CarritoItem::create($request->all());
        return redirect()->route('carritoitem.index')->with('success', '¡Los items de los carritos registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(CarritoItem $carritoitem)
    {
        return redirect()->route('carritoitem.edit', $carritoitem);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarritoItem $carritoitem)
    {
        return view('carritoitem.edit', compact('carritoitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarritoItem $carritoitem)
    {
        $request->validate([
            'orden_id' => 'required|integer',
            'prenda_id' => 'required|integer',
            'precio' => 'nullable|numeric',  
        ]);

        $carritoitem->update($request->all());
        return redirect()->route('carritoitem.index')->with('success', '¡Carrito actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarritoItem $carritoitem)
    {
        $carritoitem->delete();
        return redirect()->route('carritoitem.index')->with('success', '¡Carrito eliminado del inventario!');

    }
}
