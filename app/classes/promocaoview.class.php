<?php   
 
class promocaoview extends promocao {

    public function getAllPromocao() {
        return $this->getAll();
    }

    public function deletePromocao($id) {
        $this->delete($id);
    }

    public function insertPromocao($id_servico, $valor, $descricao) {
        $valor = str_replace(",", ".", $valor);
        $this->insert($id_servico, $valor, $descricao);
    }

    public function getServicosPromocao() {
        return $this->getServicos();
    }
}