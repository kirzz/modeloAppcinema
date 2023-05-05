@extends('padrao')

@section('content')



<div class="container mt-5">
<form method="get" action="{{route('gerenciar-filme')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefilme" id="inputPesquisar" placeholder="Digite o nome do filme" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn btn-outline-primary">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Filme</th>
      <th scope="col">Atores</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dadosfilme as $dadosfilme)
    <tr>
      <th scope="row">{{$dadosfilme->id}}</th>
      <td>{{$dadosfilme->nomefilme}}</td>
      <td>{{$dadosfilme->atoresfilme}}</td>
      <td><a href="{{route('mostrar-filme',$dadosfilme->id)}}">Alterar</a></td>
      <td>
        <form method="post" action="{{route('apagar-filme',$dadosfilme->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"> Excluir </button>
        </form>
      </td>  

    </tr>
   @endforeach
  </tbody>
</table>

</div>

@endsection