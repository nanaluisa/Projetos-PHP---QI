<?php
include 'conecta/ConectaBanco.php';

class ManipulaClasse {
  //conexao com o banco
    private $conexao=null;
    
    public function __construct() {
       //variavel recebe classe de conexão
        $this->conexao= ConectaBanco::getInstancia(); 
    }
    public function Cadastra($p){
        try{
            $sql = $this->conexao->prepare("insert into usuario(idusuario,login,senha,tipo)values(null,?,?,?)");
        /*bindValue é filho de PDO, é usada para manipular valores dentro de estruturas SQL.
         * Substitui ? por valores da classe.
         *  UMA OUTRA MANEIRA DE FAZER A MESMA COISA: 
         * $sql = $this->conexao->prepara('insert into usuario'.('idusuario, login, senha, tipo)values'
         * .'(null, '.$p->login.','.$p->senha.',',$p->tipo.')');
           */    
           
            $sql->bindValue(1,$p->login);
            $sql->bindValue(2,$p->senha);
            $sql->bindValue(3,$p->tipo);
           
            $sql->execute();
            $this->conexao=null;//encerra conexao
        } catch (PDOException $e) {
                echo "Erro ao cadastrar!";
        }
    }
   
    public function Buscar(){
        try{
            //sql recebe comando de busca do banco 
            $sql= $this->conexao->query('select * from usuario');
            
            $array=array();
            //variavel array recebe dados vindos do banco 
            //estes dados são salvos antes dentro da classe
            //serviço feito pelo fetchAll
            $array=$sql->fetchAll(PDO::FETCH_CLASS,'ClassePrincipal');
            //encerra conexao
            $this->conexao=null;
            //retorna array populado com os dados do banco
            return $array;
         }catch (Exception $e){
        echo 'Erro ao buscar';
    }
   }
   // o deleta é feito a partir de um dado inserido pelo usuario
   //em uma caixa de input esse dado é passado como argumento
   //dentro do método deleltar
   public function Deletar($idusuario){
        try{ //sql recebe conexao e prepara banco para receber uma exclusão de dado
             $sql= $this->conexao->prepare('delete'. ' from usuario where '. 'idusuario=?'); 
       // tem que haver um espaço para a concatenação não grudar os comandos! por isso dos bugs.
      //pode ser escrito assim:  ('delete from usuario where idusuario=?')
             
            //bindValue substitui ? pelo valor inserido pelo usuario
             $sql->bindValue(1,$idusuario);
             //executa comando
             $sql->execute();
             $this->conexao=null;
        }catch(Exception $e){
        echo 'Erro ao deletar';
    }   
        
        }
   
   
    
}

?>