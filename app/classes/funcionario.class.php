<?php

include 'database.class.php';

class funcionario extends Database {

    protected function getFuncionariosLista() {
        
        $sql = "SELECT * FROM funcionario  WHERE STATUS = 1";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function getFuncionario($id) {
        
        $sql = "SELECT * FROM funcionario  WHERE STATUS = 1 AND id_funcionario = ?";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function insert($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho) {
       
        $sql = "INSERT INTO funcionario (nome, permissao, telefone,  senha, comissaoserv, salariofixo, comissaoprod, percentual, caminho_imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";        

        $permissao = 'N';
        $comissaoserv = 'N';
        $salariofix = 'N';
        $comissaoprod = 'N';
        
        try {
            $stm = $this->connect()->prepare($sql);            
            $stm->execute([$nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho]);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }

    }

    protected function delete($id) {
        
        $sql = "UPDATE funcionario SET status = 0 WHERE id_funcionario = ?";
        error_log("Excluido funcionario:  ".$id);
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$id]);
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function update($telefone, $senha, $nome, $caminho, $permissao, $comissaoserv, $comissaoprod, $percentualedt, $id) {
       
        $sqlUpdate = "UPDATE funcionario SET `telefone` = ?, `senha` = ?, `nome` = ?, `caminho_imagem` = ?, `permissao` = ?, `comissaoserv` = ?, `comissaoprod` = ?, `percentual` = ? WHERE (`id_funcionario` = ?)";

        try {
            $stm = $this->connect()->prepare($sqlUpdate);

            // Ajustando valores nulos check box
            if($comissaoserv == NULL){
                $comissaoserv = 'N';
            }

            if($comissaoprod == NULL){
                $comissaoprod = 'N';
            }
            
            $stm->execute([$telefone, $senha, $nome, $caminho, $permissao, $comissaoserv, $comissaoprod, $percentualedt, $id]);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            error_log("Erro ao atualizar:  ".$e->getMessage());
            $this->connect()->rollback();
        }

    }

}