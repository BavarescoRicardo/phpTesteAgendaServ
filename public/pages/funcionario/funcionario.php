<?php
    include '../../../app/includes/autoloader.inc.php';

    $objFuncionario = new funcionarioview();
    $funcionarios = $objFuncionario->getFuncionarios();
    $images = glob("../imagens/*");

    if(isset($_POST["salvar"])) {

      // Tratamento de imagem inicio
        $image=$_FILES['myfile'];
        move_uploaded_file($image['tmp_name'],"../imagens/".$image['name']);

        $caminho = "../imagens/".$image['name'];
        echo($caminho);
      // Tratamento de imagem fim

      $nome      = $_POST['nome'];
      $permissao     = $_POST['permissao'];
      $telefone  = $_POST['telefone'];
      $senha     = $_POST['senha'];
      $comissaoserv     = $_POST['comissaoserv'];
      $salariofix     = $_POST['salariofixo'];
      $comissaoprod     = $_POST['comissaoprod'];
      $percentual     = $_POST['percentual'];
      $objFuncionario->insertFuncionario($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho);
      
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
                        <div class="text-center">
                          <?php echo '<img src="'.$funcionario['caminho_imagem'].'" class="rounded" style="height: 100px; width: 100px;"/><br />';?>
                          <?php echo $funcionario['nome']; ?>
                          <hr>
                          <P>Comissão Pendente</P>
                          <?php echo '<p>R$ '.$funcionario['comissaopend'].'</p>' ?> <br>                        
                          <button type="button" class="btn btn-success"><i class="fas fa-money-bill-alt" aria-hidden="true"></i> Pagar</button>                          
                        </div>
                      </div>
                    </div>
                  </div>                           
              <?php } ?>
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