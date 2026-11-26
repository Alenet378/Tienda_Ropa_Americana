<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPrenda;

class TipoPrendaController extends Controller
{
    public function index()
    {
        $tipoprenda = TipoPrenda::latest()->paginate(10);
        return view('tipoprenda.index', compact('tipoprenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipoprenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grupo_talla_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
        ]);

        TipoPrenda::create($request->all());
        return redirect()->route('tipoprenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(TipoPrenda $tipoprenda)
    {
        return redirect()->route('tipoprenda.edit', $tipoprenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoPrenda $tipoprenda)
    {
        return view('tipoprenda.edit', compact('tipoprenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoPrenda $tipoprenda)
    {
        $request->validate([
            'grupo_talla_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
        ]);

        $tipoprenda->update($request->all());
        return redirect()->route('tipoprenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoPrenda $tipoprenda)
    {
        $tipoprenda->delete();
        return redirect()->route('tipoprenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
