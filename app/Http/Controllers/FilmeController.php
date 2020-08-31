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

    function visualizar(Request $request, $filme_id) {
        $filme = Filme::find($filme_id);
        return view('filme.visualizar', ['filme' => $filme]);
    }

    /**
     * Exibe o formulário de edição de filme
     */
    function editar(Request $request, $filme_id) {
        $filme = Filme::find($filme_id);
        return view('filme.editar', ['filme' => $filme]);
    }

    function atualizar(Request $request, Filme $filme) {
        $dataValidate = $request->validate([
            'nome' => 'String|required',
            'descricao' => 'String|required',
            'duracao' => 'numeric|required'
        ]);

        $filme->nome = $dataValidate['nome'];
        $filme->descricao = $dataValidate['descricao'];
        $filme->duracao = $dataValidate['duracao'];
        $filme->save();
        
        return redirect('filme/atualizar/'.$filme->id)->with('mensagem', 'Filme salvo com sucesso!');
    }

    function deletar(Request $request, Filme $filme) {
        $filme->delete();
        return redirect('/');
    }
}
