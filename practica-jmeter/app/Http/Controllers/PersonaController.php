<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    // Muestra el formulario
    public function create()
    {
        return view('personas.create');
    }

    // Guarda el registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre'    => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correo'    => 'required|email|unique:personas,correo',
            'sexo'      => 'required|in:M,F',
        ]);

        Persona::create($request->only('nombre', 'apellidos', 'correo', 'sexo'));

        return response()->json(['status' => 'ok'], 201);
    }
}