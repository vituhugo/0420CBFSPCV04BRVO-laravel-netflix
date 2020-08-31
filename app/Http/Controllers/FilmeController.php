<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    function criar(Request $request) {
        return view('filme.criar');
    }

    function guardar(Request $request) {
        $dataValidate = $request->validate([
            'nome' => 'String|required',
            'descricao' => 'String|required',
            'duracao' => 'numeric|required'
        ]);

        $filme = new Filme();
        $filme->nome = $dataValidate['nome'];
        $filme->descricao = $dataValidate['descricao'];
        $filme->duracao = $dataValidate['duracao'];

        $filme->save();
        
        return redirect('filme/criar')->with('mensagem', 'Filme salvo com sucesso!');
    }
}
