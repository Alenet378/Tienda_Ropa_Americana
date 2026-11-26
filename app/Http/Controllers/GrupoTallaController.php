<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoTalla;

class GrupoTallaController extends Controller
{
    public function index()
    {
        $grupotalla = GrupoTalla::latest()->paginate(10);
        return view('grupotalla.index', compact('grupotalla'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grupotalla.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        GrupoTalla::create($request->all());
        return redirect()->route('grupotalla.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(GrupoTalla $grupotalla)
    {
        return redirect()->route('grupotalla.edit', $grupotalla);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GrupoTalla $grupotalla)
    {
        return view('grupotalla.edit', compact('grupotalla'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GrupoTalla $grupotalla)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        $grupotalla->update($request->all());
        return redirect()->route('grupotalla.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GrupoTalla $grupotalla)
    {
        $grupotalla->delete();
        return redirect()->route('grupotalla.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
