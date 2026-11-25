<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::latest()->paginate(10);
        return view('proveedor.index', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:8',
        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return redirect()->route('proveedor.edit', $proveedor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:8',
        ]);

        $proveedor->update($request->all());
        return redirect()->route('proveedor.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
