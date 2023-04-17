<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\cadastroFilmeModel;

class filmeController extends Controller
{
    //Construimos o CRUD aqui.

    public function buscaCadastroFilme(){

        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request)
    {
        $dadosFilme = $request->validate(
        [
            'nome_filme' =>'string|required',
            'atores_filme' =>'string|required',
            'datalancamento_filme' => 'string|required',
            'sinopse_filme' => 'string|required',
            'capa_filme' => 'file|required'
        ]);
    //dd($dadosFilme);

    $file = $dadosFilme['capa_filme'];
    $path = $file->store('capa', 'public');
    $dadosFilme['capa_filme'] = $path;


    cadastroFilmeModel::create($dadosFilme);
        //return Redirect::route('cadastro-filme');

    }

}

