<div class="modal fade" id="modalAlterarPol-{{$dadospoltrona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Alterar Poltrona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <form method = "post" action="{{route('cadastro-poltrona')}}">
    @csrf
            <div class="mb-3 form-check">
                <label for="nomepolInput" class="form-label">Nome:</label>
                <input type="text" name="nomepol" value="{{$dadospoltrona->nomepol}}" class="form-control" id="nomepolInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="numeropolInput" class="form-label">Número:</label>
                <input type="number" name="numeropol" class="form-control" id="numeropolInput">
            </div>

            <div class="mb-3 form-check">
                <label for="colunapolInput" class="form-label">Coluna:</label>
                <input type="text" name="colunapol"class="form-control" id="colunapolInput" >
            </div>

           
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

      
    
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>