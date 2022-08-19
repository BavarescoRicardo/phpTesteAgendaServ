<?php
    $objPromocao = new promocaoview();
    $resultado = $objPromocao->getAllPromocao();

    if(isset($_POST["excluir"])) {
       

        $id = $_POST['codigo'];;
        $objPromocao->deletePromocao($id);  
        $resultado = $objPromocao->getAllPromocao();
    }
?>

<table id="tabela" name="tabela" class="table table-hover table-sm table-bordered  bg-white" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NOME</th>
                <th>TEMPO</th>
                <th>DESCRIÇÃO</th>                                
                <th>VALOR</th>                                
                <th>EXCLUIR</th>                                
            </tr>
        </thead>
        <?php
            foreach($resultado as $item ){ ?>
                <tr>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    
                        <input id="id_promocao" name="id_promocao" type="hidden" value="<?php echo $item['id_promocao']; ?>">
                        <input id="id_servico" name="id_servico" type="hidden" value="<?php echo $item['id_servico']; ?>">
                        
                        <td><?php echo $item['nome_servico']; ?> </td>
                        <td><?php echo $item['tempo']; ?> </td>
                        <td><?php echo $item['descricao_servico']; ?> </td>
                        <td><?php echo $item['valor_servico']; ?> </td>
                        <td>
                        <button type="button" id="excluir"  name="excluir"  onclick="setaDadosModal(<?php echo $item['id_promocao']; ?>)"
                          class="btn btn-block btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                          <i class="fa fa-trash"></i></button>
                        </td>    
                        </td>    
                    </form>                                             
                </tr>
        <?php } ?>
</table>  


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Excluir?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
            Deseja realmente excluir esse registro?
            <input id="codigo" name="codigo" type="hidden">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>   
        </div>
        </div>
    </form>
  </div>
</div>

<script>
function setaDadosModal(valor) {
    document.getElementById('codigo').value = valor;
}
</script>
