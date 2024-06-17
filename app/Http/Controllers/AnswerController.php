<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;

class RespuestaController extends Controller
{
    public function index()
    {
        $respuestas = Respuesta::all();
        return view('respuestas.index', compact('respuestas'));
    }

    public function create()
    {
        return view('respuestas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_ejercicio' => 'required|exists:ejercicios,id',
            'texto_respuesta' => 'required',
            'es_correcta' => 'required|boolean',
        ]);

        $respuesta = Respuesta::create($validated);
        return redirect()->route('respuestas.index')->with('success', 'Respuesta creada con éxito');
    }

    public function show(Respuesta $respuesta)
    {
        return view('respuestas.show', compact('respuesta'));
    }

    public function edit(Respuesta $respuesta)
    {
        return view('respuestas.edit', compact('respuesta'));
    }

    public function update(Request $request, Respuesta $respuesta)
    {
        $validated = $request->validate([
            'id_ejercicio' => 'required|exists:ejercicios,id',
            'texto_respuesta' => 'required',
            'es_correcta' => 'required|boolean',
        ]);

        $respuesta->update($validated);
        return redirect()->route('respuestas.index')->with('success', 'Respuesta actualizada con éxito');
    }

    public function destroy(Respuesta $respuesta)
    {
        $respuesta->delete();
        return redirect()->route('respuestas.index')->with('success', 'Respuesta eliminada con éxito');
    }
}
