<?php

include 'database.class.php';

class promocao extends Database {
    
    protected function takeLastIdPromocao($valor) {
        
        $sql = "SELECT MAX(id_promocao) as id FROM promocao WHERE valor_servico = ?";

        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$valor]);
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }

    }
    protected function insertServicoPromocao($id_servico, $valor) {
        
        $results = $this->takeLastIdPromocao($valor);
        $id_promocao = $results[0];
       
        $sql = "INSERT INTO servico_promocao (id_promocao, id_servico) VALUES (?, ?)";

        try {
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$id_promocao['id'], $id_servico]);

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
                $this->connect()->rollback();
        }
    }

    protected function insert($id_servico, $valor, $descricao) {
       
        $sql = "INSERT INTO promocao (valor_servico, descricao) VALUES (?, ?)";

        try {
            $stm = $this->connect()->prepare($sql);
            
            $stm->execute([$valor, $descricao]);
            
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }

        $this->insertServicoPromocao($id_servico, $valor);
    }

    protected function getAll() {
        
        $sql = "SELECT b.id_promocao, b.id_servico, a.nome_servico, a.tempo, 
                    a.logo_servico, a.descricao_servico, c.valor_servico FROM servico a INNER JOIN servico_promocao b ON 
                    a.id_servico = b.id_servico INNER JOIN promocao c ON b.id_promocao = c.id_promocao
                    WHERE a.status = 1 AND c.status = 1 ORDER BY c.data_cadastro DESC";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function delete($id) {
        
        $sql = "UPDATE promocao SET status = 0 WHERE id_promocao = ?";
        
        try{
            $stm = $this->connect()->prepare($sql);
            $stm->execute([$id]);
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            $this->connect()->rollback();
        }
    }

    protected function getServicos() {
        
        $sql = "SELECT * from servico WHERE status = 1 ORDER BY data_cadastro DESC";
        
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