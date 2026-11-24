<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;

class PrendaController extends Controller
{
    public function index()
    {
        $prenda = Prenda::latest()->paginate(10);
        return view('prenda.index', compact('prenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fardo_id' => 'nullable|integer',
            'drop_id' => 'nullable|integer',
            'marca_id' => 'nullable|integer',
            'tipo_prenda_id' => 'nullable|integer',
            'talla_id' => 'nullable|integer',
            'condicion_id' => 'nullable|integer',
            'estado_id' => 'nullable|integer',
            'sku' => 'nullable|string|max:255',
            'nombre' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'nullable|numeric',
            'fecha_ingreso' => 'nullable|date',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        Prenda::create($request->all());
        return redirect()->route('prenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        return redirect()->route('prenda.edit', $prenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        return view('prenda.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        $request->validate([
            'fardo_id' => 'nullable|integer',
            'drop_id' => 'nullable|integer',
            'marca_id' => 'nullable|integer',
            'tipo_prenda_id' => 'nullable|integer',
            'talla_id' => 'nullable|integer',
            'condicion_id' => 'nullable|integer',
            'estado_id' => 'nullable|integer',
            'sku' => 'nullable|string|max:255',
            'nombre' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'precio' => 'nullable|numeric',
            'fecha_ingreso' => 'nullable|date',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $prenda->update($request->all());
        return redirect()->route('prenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        $prenda->delete();
        return redirect()->route('prenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
