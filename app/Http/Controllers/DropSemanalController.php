<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DropSemanal;

class DropSemanalController extends Controller
{
    public function index()
    {
        $dropsemanal = DropSemanal::latest()->paginate(10);
        return view('dropsemanal.index', compact('dropsemanal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dropsemanal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'fecha_lanzamiento' => 'nullable|date',   
        ]);

        DropSemanal::create($request->all());
        return redirect()->route('dropsemanal.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(DropSemanal $dropsemanal)
    {
        return redirect()->route('dropsemanal.edit', $dropsemanal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DropSemanal $dropsemanal)
    {
        return view('dropsemanal.edit', compact('dropsemanal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DropSemanal $dropsemanal)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'fecha_lanzamiento' => 'nullable|date',
        ]);

        $dropsemanal->update($request->all());
        return redirect()->route('dropsemanal.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DropSemanal $dropsemanal)
    {
        $dropsemanal->delete();
        return redirect()->route('dropsemanal.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
