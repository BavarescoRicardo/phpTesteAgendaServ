<div class="modal fade" id="edicaoModal" tabindex="-1" role="dialog" aria-labelledby="edicaoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  w-100 text-center" id="edicaoModalLabel">Edição de Funcionário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="container-criar" class="container">            
          <form role="form" action="funcionario.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-2">
                <input id="codigoedt" name="codigoedt" type="hidden">
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="nomeedt">Nome:</label>
                    <input type="text" class="form-control" id="nomeedt" name="nomeedt">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label for="telefoneedt">telefone/login:</label>
                  <input type="text" class="form-control" id="telefoneedt" name="telefoneedt">
                </div>
              </div>
              <div class="col-sm-2">
                <label class="btn btn-default rounded-circle" style="margin-left: 50px">
                  <button type="submit" class="btn" name="deletar"><i class="fa fa-trash fa-4x fa-circle" aria-hidden="true"></i></button>
                </label>              
              </div>
            </div>

          <div class="row">
            <div class="col-sm-2">
              <input type="file" id="myfileedt" name='myfileedt' onchange="loadFile(event)" hidden>
              <label for="myfileedt">
                <img src="" class="rounded" name="caminhoedt" id="caminhoedt" style="height: 100px; width: 100px; margin-top: -100px; margin-left: 20px"/>
              </label>
              <input id="codigoedt" name="imagemantiga" type="hidden">
            </div>

            <div class="col">
              <div class="form-group">
                <label for="permissaoedt">Permissao:</label>
                <select name="permissaoedt" id="permissaoedt" class="browser-default custom-select">
                  <option value="S">Possui</option>
                  <option value="N">Não Possui</option>
                </select> 
              </div>
            </div>
            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                  <div class="card-body">
                    <h5>Comissão por serviço?</h5>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoservedt" id="comissaoservedt" value="S">
                      <label class="form-check-label" for="comissaoservedt">Sim</label>
                    </label>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoservedt" id="comissaoservedt" value="N">
                      <label class="form-check-label" for="comissaoservedt">Não</label>
                    </label>
                  </div>
                </div> 
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label for="percentualedt">% Commisão:</label>
                  <input type="number" class="form-control" name="percentualedt" id="percentualedt" min="0.00" max="100.00" step="0.05" value="0.00">
                </div>
              </div>

            </div>

          <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col">
              <div class="form-group">
                <label for="senhaedt">Senha:</label>
                <input type="password" class="form-control" id="senhaedt" name="senhaedt" placeholder="Nova senha">                
              </div>             
            </div>

            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                  <div class="card-body">
                    <h5>Commisão em produtos?</h5>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoprodedt" id="comissaoprodedt" value="S">
                      <label class="form-check-label" for="comissaoprodedt">Sim</label>
                    </label>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoprodedt" id="comissaoprodedt" value="N">
                      <label class="form-check-label" for="comissaoprodedt">Não</label>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-2">

              </div>
            </div>          

          <br/>
          <div class="row">
            <div class="col text-center">
              <input type="button" class="btn btn-danger btn-lg mr-5" data-dismiss="modal" value="Cancelar" style="color: black;">
              <input type="submit" name="editar" class="btn btn-success btn-lg mr-5" value="Salvar" style="color: black;">
            </div>
          </div>          
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

<script>
var loadFile = function(event) {
	var image = document.getElementById('caminhoedt');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>