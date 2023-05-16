<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Poltrona;

class poltronaController extends Controller
{
    public function buscarCadastroPoltrona(){
        return View('cadastroPoltrona');
    }

    public function cadastrarPoltrona(Request $request){
        $dadospoltronas = $request->validate(
            [
                'nomepol'=> 'string|required',
                'numeropol'=> 'string|required',
                'colunapol'=> 'string|required'
            ]
            );
            Poltrona::create($dadospoltronas);
        return Redirect::route('home');
    }
/*
    public function buscarFuncionario(){
        return view('gerenciadorFuncionario',['dadosfuncionario']);
    }
 */                          
    public function MostrarGerenciadorPoltrona(Request $request){
        $dadospoltronas = Poltrona::all();
       // dd($dadosfuncionarios);
       
        $dadospoltronas = Poltrona::query();
        $dadospoltronas->when($request->nomepol,function($query,$nomepoltrona ){
            $query->where('nomepol','like','%'.$nomepoltrona.'%');
        }); 

        $dadospoltronas = $dadospoltronas->get();

        return view('gerenciadorPoltrona',['dadospoltrona'=>$dadospoltronas]);
        
    }



 public function ApagarPoltrona(Poltrona  $registrosPoltronas){
    $registrosPoltronas->delete(); 

    return redirect ::route('gerenciar-poltrona');
     
       

 }

 public function MostrarRegistrosProltona(Poltrona $registrosPoltronas){
    return view('xxx',['registrosPoltronas'=>$registrosPoltronas]);
 }

 public function AlterarBancoPoltrona(Poltrona $registrosPoltronas, Request $request){

    $dadospoltronas = $request->validate([
        'nomepol'=> 'string | required',
        'numeropol'=> 'string | required',
        'colunapol'=> 'string | required'
    ]); 

    $registrosPoltronas-fill($dadospoltronas);
    $registrosPoltronas->save();

    return redirect ::route('gerenciar-poltrona');

}


}