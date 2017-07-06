<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConectaBanco
 *
 * @author 01
 */
class ConectaBanco extends PDO {
    //limpa variavel que retornará conexao
   private static $instancia=null;
   
   public function ConectaBanco($dsn, $usuario,$senha){
       //parent referencia PDO,
       // pega metodo de PDO que faz conexao com BD
       parent::__construct($dsn,$usuario,$senha);
   }
   public static function getInstancia(){
       try{
           //instancia recebe valores de conexao
           self::$instancia=new ConectaBanco('mysql:dbname=tarde;'
                   . 'host=localhost','root','');
           
       }catch(Exception $e){
           //caso haja falha de conexao
           echo 'erro ao conectar '.$e;
           exit();
       }
       return self::$instancia;
       
   }
}
