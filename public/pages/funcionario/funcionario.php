<?php
    include '../../../app/includes/autoloader.inc.php';

    $objFuncionario = new funcionarioview();
    $funcionarios = $objFuncionario->getFuncionarios();

?>
<div id="header"> <?php include("../template/header.php"); ?> </div>

<div class="wrapper">
 
<div id="header"> <?php include("../template/menu.php"); ?> </div>

  <div class="content-wrapper ">
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Funcionarios</h1>
            <button type="button" class="btn btn-success">Adicionar Profissional</button>
          </div>
        </div>

        <div class="row mb-2">
        <?php
          foreach($funcionarios as $funcionario ){ ?>
            <!-- <option value = "<?php echo $funcionario['id_servico']; ?>"><?php echo $funcionario['nome_servico']; ?></option> -->
            
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">Cartão Funcionario</div>
                  <?php echo $funcionario['email']; ?>
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