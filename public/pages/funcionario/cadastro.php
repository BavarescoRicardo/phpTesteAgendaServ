<!-- Modal -->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="cadastroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastroModalLabel">Novo Profissional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="container-criar" class="container">            
          <form role="form" action="funcionario.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col">

              </div>
              <div class="col">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">                
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="permissao">Permissao:</label>
                  <select class="browser-default custom-select">
                    <option>Possui</option>
                    <option>Não Possui</option>
                  </select> 
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col">
              <label class="btn btn-default">
                  <input type="file" id="myfile" name='myfile' hidden>
                  <i class="fa fa-camera fa-5x" aria-hidden="true"></i>
              </label>

              
            </div>
            <div class="col">
              <div class="form-group">
                <label for="telefone">telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone">                
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Nova senha">                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                <h5 class="card-title">Commissão em serviços</h5>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                  <h5 class="card-title">Recebe salário fixo?</h5>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                <h5 class="card-title">Commissão em produtos</h5>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>
            </div>
          </div>

          <br/>
          <div class="row">
            <div class="col">
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
            </div>
            <div class="col">              
              <input type="submit" name="salvar" class="btn btn-success" value="Salvar">
            </div>
          </div>
          
        </form>
      </div>

      </div>
    </div>

  </div>
</div>