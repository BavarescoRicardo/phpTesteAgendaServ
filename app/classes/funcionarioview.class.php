<?php   
 
class funcionarioview extends funcionario {    

    public function getFuncionarios() {
        return $this->getFuncionariosLista();
    }

    public function insertFuncionario($nome, $email, $senha, $telefone) {
        $this->insert($nome, $email, $senha, $telefone);
    }
}