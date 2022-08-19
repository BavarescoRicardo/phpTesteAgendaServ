<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Profissional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="container-criar" class="col-md-6">
            <h4>Adicionar Profissional</h4>
            <form role="form" action="funcionario.php" method="POST" >
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">                
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">                
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="Nova senha">                
                </div>

                <div class="form-group">
                    <label for="telefone">telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">                
                </div>

                <input type="submit" name="salvar" class="btn btn-primary" value="Novo Funcionario">
            </form>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>