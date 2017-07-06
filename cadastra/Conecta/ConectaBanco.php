<?php
/** @author ANNA LUISA
 */
class ConectaBanco extends PDO {
    //variável responsável por receber conexão.
    private static $instancia=null;
   
    public function ConectaBanco($dsn, $usario, $senha){
        //acessando o construtor de PDO
      //parent é a referência feita a um método pai. Neste caso, PDO.
    parent::__construct($dsn, $usario, $senha);
      }  
    public static function getInstancia(){
        try {
            //atribuindo valores para conexao.
            self::$instancia= new ConectaBanco('mysql:dbname=manha;'.'host=localhost',/*parâmetros dsn - tipo do banco "mysql",
             * dbname Nome que coloquei no banco, o host. */'root'/*usuário que pode fazer qualquer coisa*/,"" /*senha.*/);
        } catch (Exception $e) {
            echo "Erro ao conectar ".$e;
            exit();
        }
        return self::$instancia;
    } 
}
    ?>
