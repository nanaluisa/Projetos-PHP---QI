<?php

class ClassePrincipal {
    private $idusuario;
    private $login;
    private $senha;
    private $tipo;

    public function __construct() {
        
    } 
     public function __get($name) {
           return $this->$name;
    } 
     
    public function __set($name, $value) {
           return $this->$name=$value;
    } 
   public function __toString(){
       return"<h2>USUARIO ".$this->idusuario."</h2>".
      "Login:".$this->login."<br/>".
       "Senha: ".$this->senha."<br/>".
       "Tipo: ".$this->tipo;        
   } 
    
}
?>