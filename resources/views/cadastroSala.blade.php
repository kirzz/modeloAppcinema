@extends('padrao')

@section('content')

<form>
            <div class="mb-3 form-check">
                <label for="salaInput" class="form-label">Sala:</label>
                <input type="text" class="form-control" id="salainput" >
            </div>

            <div class="mb-3 form-check">
                <label for="poltronaInput" class="form-label">Poltrona:</label>
                <input type="text" class="form-control" placeholder="de 1 a 100" id="poltronaInput">
            </div>


            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

@endsection