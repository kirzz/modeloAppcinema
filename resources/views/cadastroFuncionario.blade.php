@extends('padrao')

@section('content')

<form method = "post" action = "{{route('cadastro-funcionario')}}">
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nomefun" id="nomeinput" >
            </div>
            <div class="mb-3 form-check">
                <label for="EmailInput" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="emailfun" id="emailInput">
            </div>
            
            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">Whatsapp:</label>
                <input type="text" class="form-control" name="whatsappfun" id="whatsappInput">
            </div>

            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="cpffun" id="cpfInput">
            </div>

            <div class="mb-3 form-check">
                <label for="senhaInput" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senhafun" id="senhaInput">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection