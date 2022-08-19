<?php

include 'database.class.php';

class login extends Database {

    protected function isUsuario($mail, $senha) {
        
        $sql = "SELECT * FROM funcionario  WHERE STATUS = 1 and telefone LIKE ? AND senha LIKE ?";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$mail, $senha]);
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function getDadosSesao($mail, $senha) {
        
        $sql = "SELECT * FROM funcionario  WHERE STATUS = 1 and telefone LIKE ? AND senha LIKE ?";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$mail, $senha]);
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }
}