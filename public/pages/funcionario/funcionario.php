<?php
    include '../../../app/includes/autoloader.inc.php';

    $objFuncionario = new funcionarioview();
    $funcionarios = $objFuncionario->getFuncionarios();

    if(isset($_POST["salvar"])) {
      
      // Tratamento de imagem inicio
          // $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
          // $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
          // $dir = '/'; //Diretório para uploads 
          // move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          // echo("Imagen enviada com sucesso!");
      // Tratamento de imagem fim

      $nome      = $_POST['nome'];
      $email     = $_POST['email'];
      $telefone  = $_POST['telefone'];
      $senha     = $_POST['senha'];      
      $objFuncionario->insertFuncionario($nome, $email, $senha,  $telefone);  
      
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
                  <div class="card-body">Cartão Funcionario</div>
                  <?php echo $funcionario['nome']; ?>
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

		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>

      </div>
    </div>

  </div>
  

<div id="header"> <?php include("../template/footer.php"); ?> </div>