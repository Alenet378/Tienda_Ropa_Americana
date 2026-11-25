<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::latest()->paginate(10);
        return view('usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rol_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
            'correo' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'activo' => 'nullable|boolean',
            'remember_token' => 'nullable|string|max:255',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        Usuario::create($request->all());
        return redirect()->route('usuario.index')->with('success', '¡Clientes registrado exitosamente en el inventario!');
        }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return redirect()->route('usuario.edit', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'rol_id' => 'nullable|integer',
            'nombre' => 'nullable|string|max:255',
            'correo' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'activo' => 'nullable|boolean',
            'remember_token' => 'nullable|string|max:255',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $usuario->update($request->all());
        return redirect()->route('usuario.index')->with('success', '¡Cliente actualizado correctamente en el sistema!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index')->with('success', '¡Cliente eliminado del inventario!');

    }
}
