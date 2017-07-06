<?php
/**
 * Description of conectaBanco
 *
 * @author Gilmar
 */
class conectaBanco extends PDO{
    //variavel responsavel por receber conexao
   private static $instancia=null;
   
   public function conectaBanco($dsn, $usuario, $senha){
       //parent é a referencia feita a um metodo pai
       //neste caso PDO
        parent::__construct($dsn, $usuario, $senha);
        
}  
    public static function getInstancia(){
        try{
            //atribuindo valores para conexao.
            self::$instancia=new conectaBanco('mysql:dbname=matricula; host=localhost root','');
        } catch(Exception $e)  {
        echo "erro ao conectar".$e;
         exit();
        }
        return self::$instancia;
    }
}
?>
