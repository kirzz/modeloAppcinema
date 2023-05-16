@extends('padrao')

@section('content') 

<form method = "post" action="{{route('cadastro-poltrona')}}">
    @csrf
            <div class="mb-3 form-check">
                <label for="nomepolInput" class="form-label">Nome:</label>
                <input type="text" name="nomepol" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="numeroInput" class="form-label">Número:</label>
                <input type="number" name="numeropol" class="form-control" id="numeroInput">
            </div>

            <div class="mb-3 form-check">
                <label for="colunaInput" class="form-label">Coluna:</label>
                <input type="text" name="colunapol"class="form-control" id="colunaInput" >
            </div>
           
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection
