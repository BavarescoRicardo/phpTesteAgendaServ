<?php
    $objPromocao = new promocaoview();
    
    $servicos = $objPromocao->getServicosPromocao();

    if(isset($_POST["salvar"])) {
        $id_servico   = $_POST['id_servico'];
        $valor        = $_POST['valor'];
        $descricao    = $_POST['descricao'];
        $objPromocao->insertPromocao($id_servico, $valor, $descricao);  
        
       $_SESSION['message'] = "SALVO COM SUCESSO";
       $_SESSION['msg_type'] = "success";
       
       if (headers_sent()) die("O redirecionamento falhou. Por favor, clique neste link para ser redirecionado: <a href='promocao.php'>Promoção</a>");
       else exit(header("Location: promocao.php"));
        
    }
?>

<form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
    <div class="row">
        <div class="col-lg-10">
            <label style="font-size: 16px;">Serviço</label>

            <select class="form-control col-lg-12 col-xs-12" id="id_servico" name="id_servico" >
                <?php
                    foreach($servicos as $item ){ ?>
                    <option value = "<?php echo $item['id_servico']; ?>"><?php echo $item['nome_servico']; ?></option>
                
                <?php } ?>
            </select>
        </div>

        <div class="col-lg-2">
            <label style="font-size: 16px;">Valor</label>
            <input class="form-control col-lg-12 col-xs-12" id="valor" name="valor" type="text"
                onkeyup="formatarMoeda();" placeholder="R$ "
                required oninvalid="this.setCustomValidity('INFORME O VALOR')" 
                oninput="this.setCustomValidity('')"/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label style="font-size: 16px;">Descrição</label>
            <textarea class="form-control col-lg-12 col-xs-12" id="descricao" name="descricao" type="text" maxlength="255"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 " style="margin-top: 30px;">
            <button type="submit" name="salvar" class="btn btn-block btn-info">SALVAR</button>   
        </div>
        <div class="col-lg-2 " style="margin-top: 30px;">
            <a href="promocao.php" class="btn btn-dark btn-block">CENCELAR</a>
        </div>
    </div>
    
</form>