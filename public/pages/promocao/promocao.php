<?php
    include '../../../app/includes/autoloader.inc.php';
?>
<div id="header"> <?php include("../template/header.php"); ?> </div>

<div class="wrapper">
 
<div id="header"> <?php include("../template/menu.php"); ?> </div>

   
  <div class="content-wrapper ">
   
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Promoção</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content" >
      <div class="container-fluid">
		<div class="row" style="margin-bottom:20px">
			<div class="col-lg-12">
				<input type="button" class="btn btn-block btn-info" onclick="location.href='promocao-cadastro.php';"  value="CADASTRAR">   
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div id="header"> <?php include("list.php"); ?> </div>    
			</div>
		</div>

      </div>
    </div>

  </div>
  

<div id="header"> <?php include("../template/footer.php"); ?> </div>