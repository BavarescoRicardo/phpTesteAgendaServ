<?php   
 
class funcionarioview extends funcionario {    

    public function getFuncionarios() {
        return $this->getFuncionariosLista();
    }

    public function insertFuncionario($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho) {
        $this->insert($nome, $permissao, $telefone,  $senha, $comissaoserv, $salariofix, $comissaoprod, $percentual, $caminho);  
    }
}