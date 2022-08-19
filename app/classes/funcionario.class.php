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
}