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

        try {
            $stm = $this->connect()->prepare($sql);
            
            $stm->execute([$nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho]);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }

    }

}