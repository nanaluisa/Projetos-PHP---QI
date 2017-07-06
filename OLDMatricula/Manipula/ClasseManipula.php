<?php
/**
 * Description of ClasseManipula
 *
 * @author Gilmar
 */
include 'Conecta/conectaBanco.php';
class ClasseManipula {
    private $conexao=null;
    
    public function __construct() {
        //variavel recebe classe de conexao
      $this->conexao=  conectaBanco::getInstancia();  
    }
    
    
    public function Matricular($p){
        try {
            $sql = $this->conexao->prepare("insert into aluno(idaluno,nome,cpf,curso,ndsciplina,nparcelas,condicao,valor,taxa)values (null,?,?,?,?,?,?,?,?)");
            //bind value eh filho de PDO eh usada para manipular 
            //valores dentro de estruturas sql
            //substitue? por valores da classe 
            //uma outra maneira de fazer a mesma coisa .ex.:
            //$sql = $this->conexao->prepare(insert into usuario)
            //.'(idusuario,login,senha,tipo)values'
            //(null, '$p->login.','$p->senha','$p->tipo.'
            $sql->bindValue(1,$p->idaluno);
            $sql->bindValue(2,$p->nome);
            $sql->bindValue(3,$p->cpf);
            $sql->bindValue(4,$p->curso);
            $sql->bindValue(5,$p->ndisciplina);
            $sql->bindValue(6,$p->nparcelas);
            $sql->bindValue(7,$p->condicao);
            $sql->bindValue(8,$p->valor);
            $sql->bindValue(9,$p->taxa);
            $sql->execute();
            $this->conexao=null;//encerra conexao
        } catch (PDOException $e) {
            echo 'erro ao cadastrar aluno';
        }
    }

        public function Buscar(){
    try{
        //sql recebe dados vindus do banco
        $sql=$this->conexao->query('select * from aluno');
        $array=array();
        //variavel array recebe dados vindos do banco 
        //estes dados estao salvos antes dentro da classe 
        //serviço feito pelo fetAll
        $array=$sql->fetchAll(PDO::FETCH_CLASS,'classeMatricula');
        //encerra a conexao
        $this->conexao=null;
        return $array;
    } catch (Exception $e) {
        echo 'ERRO AO BUSCAR';
    }

}
    //o deleta e feito a partir de um dado inserido pelo usuario 
    //em um caixa de input esse dado eh passadocomo argumento
    //dentro do metodo deletar 
       public function Deletar($idusuario){
    try{//sql recebe conexao e prepara banco para 
        //receber uma exclusao de dado 
        $sql=$this->conexao->prepare('delete from aluno where idualuno=?');
        //bindValue subistitui ? pelo valor inseridopelo usuarrio
        $sql->bindValue(1,$idusuario);
        //executa o comando
        $sql->execute();
        $this->conexao=null;
       // $array=$sql->fetchAll(PDO::FETCH_CLASS,'classeCadastrar');
      //  $this->conexao=null;
        //return $array;
    } catch (Exception $e) {
        echo 'ERRO AO DELETAR';
    }
}

    }

