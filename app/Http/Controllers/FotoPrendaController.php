<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoPrenda;

class FotoPrendaController extends Controller
{
    public function index()
    {
        $fotoprenda = FotoPrenda::latest()->paginate(10);
        return view('fotoprenda.index', compact('fotoprenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fotoprenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',
            'ruta' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
        ]);

        FotoPrenda::create($request->all());
        return redirect()->route('fotoprenda.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(FotoPrenda $fotoprenda)
    {
        return redirect()->route('fotoprenda.edit', $fotoprenda);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoPrenda $fotoprenda)
    {
        return view('fotoprenda.edit', compact('fotoprenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoPrenda $fotoprenda)
    {
        $request->validate([
            'prenda_id' => 'nullable|integer',
            'ruta' => 'nullable|string|max:255',
            'orden' => 'nullable|integer',
        ]);

        $fotoprenda->update($request->all());
        return redirect()->route('fotoprenda.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FotoPrenda $fotoprenda)
    {
        $fotoprenda->delete();
        return redirect()->route('fotoprenda.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
