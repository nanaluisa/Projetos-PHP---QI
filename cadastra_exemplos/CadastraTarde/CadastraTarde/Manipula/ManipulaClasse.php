<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManipulaClasse
 *
 * @author 01
 */
include_once 'Conecta/ConectaBanco.php';
class ManipulaClasse {
    
    private $conexao=null;
    
    public function __construct() {
        $this->conexao= ConectaBanco::getInstancia();
    }
    public function Cadastrar($p){
        try{
           $sql = $this->conexao->prepare("insert into usuario(idusuario,login,senha,tipo)values(null,?,?,?)");
		             //bindValue é um método utilizado para manipular
            //linguagem sql dentro do php. 
            // Neste caso substitui valores por ?
            $sql->bindValue(1,$p->login);
            $sql->bindValue(2,$p->senha);
            $sql->bindValue(3,$p->tipo);
            
            $sql->execute();//executa sql
            $this->conexao=null;//encerra a conexão
        }  catch (PDOException $e){
            echo 'erro ao cadastrar';
        }
        
        
    }
}
