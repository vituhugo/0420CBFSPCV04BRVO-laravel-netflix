<?php

namespace App\Http\Controllers;

use App\Generos;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    function criar() {
        return view('genero.form');
    }

    function guardar(Request $request) {
        $validatedData = $request->validate([
            'nome' => 'required|max:255'
        ]);
        $genero = new Generos();
        $genero->nome = $validatedData['nome'];
        $genero->save();

        return redirect('/')->with('message', 'Registro Salvo!');
    }
}
