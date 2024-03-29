<?php   
 
class funcionarioview extends funcionario {    

    public function getFuncionarios() {
        return $this->getFuncionariosLista();
    }

    public function getFuncionarioUnico($id) {
        return $this->getFuncionario($id);
    }
    
    public function deleteFuncionario($id) {
        $this->delete($id);
    }

    public function updateFuncionario($telefone, $senha, $nome, $caminho, $permissao, $comissaoserv, $comissaoprod, $percentualedt, $id) {
        return $this->update($telefone, $senha, $nome, $caminho, $permissao, $comissaoserv, $comissaoprod, $percentualedt, $id);
    }

    public function insertFuncionario($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho) {
        $this->insert($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho);  
    }
}