<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassePrincipal
 *
 * @author 01
 */
class ClassePrincipal {
    private $senha;
    private $login;
    private $tipo;
    
    public function __construct() {}
     public function __set($name,$value) {
         $this->$name=$value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __toString() {
        return "Login:".$this->login.
                "Senha:".$this->senha.
                "Tipo:".$this->tipo;
    }
}
