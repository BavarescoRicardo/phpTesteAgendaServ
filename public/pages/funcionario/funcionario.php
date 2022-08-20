<?php
    include '../../../app/includes/autoloader.inc.php';

    $objFuncionario = new funcionarioview();
    $funcionarios = $objFuncionario->getFuncionarios();

    // Variavél para carregar as imagens salvas
    // $files = glob(dirname(__DIR__) ."/imagens/*.*");
    
    // $dirname = "media/images/iconized/";
    $images = glob("../imagens/*");

    if(isset($_POST["salvar"])) {

      // Tratamento de imagem inicio
        $image=$_FILES['myfile'];
        move_uploaded_file($image['tmp_name'],"../imagens/".$image['name']);

        $caminho = "../imagens/".$image['name'];
        echo($caminho);
      // Tratamento de imagem fim

      $nome      = $_POST['nome'];
      $email     = $_POST['email'];
      $telefone  = $_POST['telefone'];
      $senha     = $_POST['senha'];      
      $objFuncionario->insertFuncionario($nome, $email, $senha,  $telefone, $caminho);  
      
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
                <h1 class="m-0">Funcionarios</h1>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Adicionar Profissional</button>
              </div>
            </div>

            <div class="row mb-2">
            <?php
              foreach($funcionarios as $funcionario ){ ?>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">Funcionario</div>                  
                      <?php echo $funcionario['nome']; ?>
                      <?php echo '<img src="'.$funcionario['caminho_imagem'].'" style="height: 100px; width: 100px;"/><br />';?>
                      <P>Comissão Pendente</P>
                      <?php echo $funcionario['comissaopend']; ?>
                      <button type="button" style="color: black; width: 100px" class="btn btn-success">Pagar</button>
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