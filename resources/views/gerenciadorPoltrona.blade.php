@extends('padrao')
@section('content')

<div class="container mt-5">
<form method="get" action="{{route('gerenciar-poltrona')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomepol" id="inputPesquisar" placeholder="Digite o numero da poltrona" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Numero</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dadospoltrona as $dadospoltrona)
    <tr>
      <th scope="row">{{$dadospoltrona->id}}</th>
      <td>{{$dadospoltrona->nomepol}}</td>
      <td>{{$dadospoltrona->numeropol}}</td>
      <td>  
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalAlterarPol-{{$dadospoltrona->id}}">
          Alterar
        </button>

@include('modal.poltronaAlterar')

    
    </td>
      <td>

      <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeletePol-{{$dadospoltrona->id}}">
          Excluir
        </button>

@include('modal.poltronaDeletar')



      </td>  


 
    </tr>
   @endforeach
  </tbody>
</table>

</div>
@endsection