<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index()
    {
        $rol = Rol::latest()->paginate(10);
        return view('rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        Rol::create($request->all());
        return redirect()->route('rol.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Rol $rol)
    {
        return redirect()->route('rol.edit', $rol);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        return view('rol.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rol $rol)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
        ]);

        $rol->update($request->all());
        return redirect()->route('rol.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('rol.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
