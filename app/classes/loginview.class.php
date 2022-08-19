<?php   
 
class loginview extends login {
    
    public function isUsuarioLogin($mail, $senha) {
       
        $resultado = $this->isUsuario($mail, $senha);     
        if(count($resultado) > 0)
            return true; 
        
        return false;
    }

    public function getSessao($mail, $senha) {
        return $this->getDadosSesao($mail, $senha);
    }
}