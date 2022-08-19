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

    protected function insert($nome, $email, $senha, $telefone) {
       
        $sql = "INSERT INTO funcionario (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";

        try {
            $stm = $this->connect()->prepare($sql);
            
            $stm->execute([$nome, $email, $senha, $telefone]);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }

        // $this->insertServicoPromocao($id_servico, $valor);
    }

}