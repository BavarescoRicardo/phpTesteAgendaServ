<?php   
 
class funcionarioview extends funcionario {    

    public function getFuncionarios() {
        return $this->getFuncionariosLista();
    }
}