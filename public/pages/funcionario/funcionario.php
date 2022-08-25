<?php
    include '../../../app/includes/autoloader.inc.php';

    $objFuncionario = new funcionarioview();
    $funcionarios = $objFuncionario->getFuncionarios();
    $images = glob("../imagens/*");
    $indice = 0;

    if(isset($_POST["salvar"])) {

      // Tratamento de imagem inicio
        $image=$_FILES['myfile'];
        move_uploaded_file($image['tmp_name'],"../imagens/".$image['name']);

        $caminho = "../imagens/".$image['name'];
      // Tratamento de imagem fim

      $nome      = $_POST['nome'];
      $permissao = $_POST['permissao'];
      $telefone  = $_POST['telefone'];
      $senha     = $_POST['senha'];
      $comissaoserv   = $_POST['comissaoserv'];
      $salariofix     = $_POST['salariofixo'];
      $comissaoprod   = $_POST['comissaoprod'];
      $percentual     = $_POST['percentual'];
      $objFuncionario->insertFuncionario($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho);
      
     $_SESSION['message'] = "SALVO COM SUCESSO";
     $_SESSION['msg_type'] = "success";
     
     if (headers_sent()) die("O redirecionamento falhou. Por favor, clique neste link para ser redirecionado: <a href='funcionario.php'>Promoção</a>");
     else exit(header("Location: funcionario.php"));      
  }

  if(isset($_POST["editar"])) {
    // Tratamento de imagem inicio
      $image=$_FILES['myfileedt'];
      move_uploaded_file($image['tmp_name'],"../imagens/".$image['name']);

      $caminhoedt = "../imagens/".$image['name'];
    // Tratamento de imagem fim
        
    $id    = $_POST['codigoedt'];
    $nomeedt      = $_POST['nomeedt'];
    $permissaoedt = $_POST['permissaoedt'];
    $telefoneedt  = $_POST['telefoneedt'];
    $senhaedt     = $_POST['senhaedt'];
    $comissaoservedt   = $_POST['comissaoservedt'];
    $comissaoprodedt   = $_POST['comissaoprodedt'];
    // $percentual     = $_POST['percentualedt'];
    $percentualedt = 0.00;
    $objFuncionario->updateFuncionario($telefoneedt, $senhaedt, $nomeedt, $caminhoedt, $permissaoedt, $comissaoservedt, $comissaoprodedt, $percentualedt, $id);
    
   $_SESSION['message'] = "SALVO COM SUCESSO";
   $_SESSION['msg_type'] = "success";
   
   if (headers_sent()) die("O redirecionamento falhou. Por favor, clique neste link para ser redirecionado: <a href='funcionario.php'>Promoção</a>");
   else exit(header("Location: funcionario.php"));   
  }
?>

<div id="header"> <?php include("../template/header.php"); ?> </div>

<div class="wrapper"> 
  <div id="header"> <?php include("../template/menu.php"); ?> </div>
  <div id="header"> <?php include("cadastro.php"); ?> </div>
  <div id="header"> <?php include("edicao.php"); ?> </div>    
    <div class="content-wrapper ">    
      <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastroModal">Adicionar Profissional</button>
              </div>
            </div>
            <div class="row mb-2">            
              <?php            
                foreach($funcionarios as $funcionario ){ ?>                
                  <div class="col-sm-3">
                    <div class="card border-dark" style="border: 1px solid;">                    
                      <div class="card-body">
                        <div class="text-right btn-edita">
                          <button type="button" id="editar"  name="editar"  onclick="setaDadosModal(<?php echo $indice; ?>)"
                            class="btn btn-secondary" data-toggle="modal" data-target="#edicaoModal">
                            <i class="fas fa-edit"></i></button>                          
                        </div>
                          <input id="codigof" name="codigof" value="<?php echo $funcionario['id_funcionario']; ?>" type="hidden">
                        <div class="text-center">
                          <?php echo '<img src="'.$funcionario['caminho_imagem'].'" class="rounded" style="height: 100px; width: 100px;"/><br />';?>
                          <?php echo $funcionario['nome']; ?>
                          <hr>
                          <P>Comissão Pendente</P>
                          <h5 class="text-info"><?php echo '<p>R$ '.$funcionario['comissaopend'].'</p>' ?></h5> <br>                        
                          <button type="button" class="btn btn-success"><i class="fas fa-money-bill-alt" aria-hidden="true"></i> Pagar</button>                          
                        </div>
                      </div>                      
                    </div>
                  </div>
              <?php $indice ++;} ?>
            </div>
          </div>

        </div>        
        <div class="content" >
          <div class="container-fluid">
        <div class="row" style="margin-bottom:20px">
          <div class="col-lg-12">
          </div>
        </div>
      </div>
    </div>
</div>
  

<div id="header"> <?php include("../template/footer.php"); ?> </div>

<script>
function setaDadosModal(valor) {
    console.log(valor);
    var obj = <?php echo json_encode($funcionarios); ?>;
    
    //console.log(obj);
    //document.location.reload(true);
    document.getElementById('codigoedt').value = obj[valor].id_funcionario;
    document.getElementById('nomeedt').value = obj[valor].nome;
    document.getElementById('senhaedt').value = obj[valor].senha;
    document.getElementById('telefoneedt').value = obj[valor].telefone;

    document.getElementById('caminhoedt').src = obj[valor].caminho_imagem;
}
</script>