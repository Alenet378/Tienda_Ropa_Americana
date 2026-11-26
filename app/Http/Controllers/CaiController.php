<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cai;

class CaiController extends Controller
{
    public function index()
    {
        $cai = Cai::latest()->paginate(10);
        return view('cai.index', compact('cai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_cai' => 'required|string|max:50',
            'establecimiento' => 'nullable|string|max:3',
            'punto_emision' => 'required|string|max:2',
            'tipo_documento' => 'required|string|max:2',
            'tienda' => 'required|string|max:3',
            'rango_inicial' => 'required|integer',
            'rango_final' => 'required|integer',
            'correlativo_actual' => 'required|integer',
            'fecha_limite' => 'required|date',
            'activo' => 'required|boolean',   
        ]);

        Cai::create($request->all());
        return redirect()->route('cai.index')->with('success', '¡Producto registrado exitosamente en el inventario!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cai $cai)
    {
        return redirect()->route('cai.edit', $cai);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cai $cai)
    {
        return view('cai.edit', compact('cai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cai $cai)
    {
        $request->validate([
            'codigo_cai' => 'required|string|max:50',
            'establecimiento' => 'nullable|string|max:3',
            'punto_emision' => 'required|string|max:2',
            'tipo_documento' => 'required|string|max:2',
            'tienda' => 'required|string|max:3',
            'rango_inicial' => 'required|integer',
            'rango_final' => 'required|integer',
            'correlativo_actual' => 'required|integer',
            'fecha_limite' => 'required|date',
            'activo' => 'required|boolean', 
        ]);

        $cai->update($request->all());
        return redirect()->route('cai.index')->with('success', '¡CAI actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cai $cai)
    {
        $cai->delete();
        return redirect()->route('cai.index')->with('success', '¡Cai eliminado del inventario!');

    }
}
