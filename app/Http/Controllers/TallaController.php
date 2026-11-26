<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talla;

class TallaController extends Controller
{
    public function index()
    {
        $talla = Talla::latest()->paginate(10);
        return view('talla.index', compact('talla'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('talla.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grupo_talla_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
        ]);

        Talla::create($request->all());
        return redirect()->route('talla.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Talla $talla)
    {
        return redirect()->route('talla.edit', $talla);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Talla $talla)
    {
        return view('talla.edit', compact('talla'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Talla $talla)
    {
        $request->validate([
            'grupo_talla_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
        ]);

        $talla->update($request->all());
        return redirect()->route('talla.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Talla $talla)
    {
        $talla->delete();
        return redirect()->route('talla.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
