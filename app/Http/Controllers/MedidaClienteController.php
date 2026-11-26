<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedidaCliente;

class MedidaClienteController extends Controller
{
    public function index()
    {
        $medidacliente = MedidaCliente::latest()->paginate(10);
        return view('medidacliente.index', compact('medidacliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medidacliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'nullable|integer',
            'hombro' => 'nullable|numeric',
            'pecho' => 'nullable|numeric',
            'cintura' => 'nullable|numeric',
            'largo' => 'nullable|numeric',
            'updated_at' => 'nullable|date',
        ]);

        MedidaCliente::create($request->all());
        return redirect()->route('medidacliente.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(MedidaCliente $medidacliente)
    {
        return redirect()->route('medidacliente.edit', $medidacliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedidaCliente $medidacliente)
    {
        return view('medidacliente.edit', compact('medidacliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MedidaCliente $medidacliente)
    {
        $request->validate([
            'cliente_id' => 'nullable|integer',
            'hombro' => 'nullable|numeric',
            'pecho' => 'nullable|numeric',
            'cintura' => 'nullable|numeric',
            'largo' => 'nullable|numeric',
            'updated_at' => 'nullable|date',
        ]);

        $medidacliente->update($request->all());
        return redirect()->route('medidacliente.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedidaCliente $medidacliente)
    {
        $medidacliente->delete();
        return redirect()->route('medidacliente.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
