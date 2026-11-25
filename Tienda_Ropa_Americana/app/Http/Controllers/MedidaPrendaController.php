<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedidaPrenda;

class MedidaPrendaController extends Controller
{
    public function index()
    {
        $medidaprenda = MedidaPrenda::latest()->paginate(10);
        return view('medidaprenda.index', compact('medidaprenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medidaprenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',
            'hombro' => 'nullable|numeric',
            'pecho' => 'nullable|numeric',
            'cintura' => 'nullable|numeric',
            'largo' => 'nullable|numeric',
            'updated_at' => 'nullable|date',
        ]);

        MedidaPrenda::create($request->all());
        return redirect()->route('medidaprenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(MedidaPrenda $medidaprenda)
    {
        return redirect()->route('medidaprenda.edit', $medidaprenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedidaPrenda $medidaprenda)
    {
        return view('medidaprenda.edit', compact('medidaprenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MedidaPrenda $medidaprenda)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',
            'hombro' => 'nullable|numeric',
            'pecho' => 'nullable|numeric',
            'cintura' => 'nullable|numeric',
            'largo' => 'nullable|numeric',
            'updated_at' => 'nullable|date',
        ]);

        $medidaprenda->update($request->all());
        return redirect()->route('medidaprenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedidaPrenda $medidaprenda)
    {
        $medidaprenda->delete();
        return redirect()->route('medidaprenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
