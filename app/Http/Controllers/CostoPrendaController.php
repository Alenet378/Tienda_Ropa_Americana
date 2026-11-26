<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostoPrenda;

class CostoPrendaController extends Controller
{
    public function index()
    {
        $costoprenda = CostoPrenda::latest()->paginate(10);
        return view('costoprenda.index', compact('costoprenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('costoprenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',   
            'costo' => 'nullable|numeric',   
            'created_at' => 'nullable|date',   
        ]);

        CostoPrenda::create($request->all());
        return redirect()->route('costoprenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(CostoPrenda $costoprenda)
    {
        return redirect()->route('costoprenda.edit', $costoprenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CostoPrenda $costoprenda)
    {
        return view('costoprenda.edit', compact('costoprenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CostoPrenda $costoprenda)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',   
            'costo' => 'nullable|numeric',   
            'created_at' => 'nullable|date',
        ]);

        $costoprenda->update($request->all());
        return redirect()->route('costoprenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CostoPrenda $costoprenda)
    {
        $costoprenda->delete();
        return redirect()->route('costoprenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
