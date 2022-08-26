<?php

  if(isset($_POST["editar"])) {
    echo 'Tentando editar';    

    
    if (headers_sent()) die("O redirecionamento falhou. Por favor, clique neste link para ser redirecionado: <a href='funcionario.php'>Promoção</a>");
    else exit(header("Location: funcionario.php"));      
}  

?>

<!-- Modal -->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="cadastroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  w-100 text-center" id="cadastroModalLabel">Cadastro de Funcionário</h5>
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
                  <select name="permissao" id="permissao" class="browser-default custom-select">
                    <option value="S">Possui</option>
                    <option value="N">Não Possui</option>
                  </select> 
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col">
              <img src="" class="rounded" name="imagefunc" id="imagefunc" style="visibility: hidden; height: 100px; width: 105px; margin-top: -105px; margin-left: 120px"/>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label class="btn btn-default" style="margin-top: -20px; margin-left: 120px">
                  <input type="file" id="myfile" name='myfile' onchange="loadFileCad(event)" hidden>
                  <i class="fa fa-camera fa-5x"  aria-hidden="true"></i>
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
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Nova senha">                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                <div class="card-body">
                  <h5>Comissão por serviço?</h5>
                  <label class="radio-inline" style="font-weight: normal;">
                    <input type="radio" name="comissaoserv" id="comissaoserv" value="S">
                    <label class="form-check-label" for="comissaoserv">Sim</label>
                  </label>
                  <label class="radio-inline" style="font-weight: normal;">
                    <input type="radio" name="comissaoserv" id="comissaoserv" value="N">
                    <label class="form-check-label" for="inlineRadio2">Não</label>
                  </label>
                </div>
              </div>              
            </div>


            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                  <div class="card-body">
                    <h5>Recebe salário fixo?</h5>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="salariofixo" id="salariofixo" value="S">
                      <label class="form-check-label" for="salariofixo">Sim</label>
                    </label>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="optradio" id="salariofixo" value="N">
                      <label class="form-check-label" for="salariofixo">Não</label>
                    </label>
                  </div>
                </div>
            </div>

            <div class="col">
              <div class="card border-dark" style="border: 1px solid;">
                  <div class="card-body">
                    <h5>Commisão em produtos?</h5>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoprod" id="comissaoprod" value="S">
                      <label class="form-check-label" for="comissaoprod">Sim</label>
                    </label>
                    <label class="radio-inline" style="font-weight: normal;">
                      <input type="radio" name="comissaoprod" id="comissaoprod" value="N">
                      <label class="form-check-label" for="comissaoprod">Não</label>
                    </label>
                  </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
            <label for="percentual">% da comissão</label>
              <input type="number" class="form-control" name="percentual" id="percentual" min="0.00" max="100.00" step="0.05" value="0.00">
            </div>
          </div>

          <br/>
          <div class="row">
            <div class="col text-center">
              <input type="button" class="btn btn-danger btn-lg mr-5" data-dismiss="modal" value="Cancelar">
              <input type="submit" name="salvar" class="btn btn-success btn-lg mr-5" value="Salvar">
            </div>
          </div>
          
        </form>
      </div>

      </div>
    </div>

  </div>
</div>

<script>
var loadFileCad = function(event) {
	var image = document.getElementById('imagefunc');
  document.getElementById('imagefunc').style.visibility = 'visible';
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>