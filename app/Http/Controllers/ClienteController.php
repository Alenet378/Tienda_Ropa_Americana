<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::latest()->paginate(10);
        return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'orden_id' => 'required|integer',
            'prenda_id' => 'required|integer',
            'precio' => 'nullable|numeric',   
        ]);

        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return redirect()->route('cliente.edit', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'orden_id' => 'required|integer',
            'prenda_id' => 'required|integer',
            'precio' => 'nullable|numeric',  
        ]);

        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
