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
            $sql = $this->conexao->prepare("insert into aluno(idaluno,nome,cpf,curso,ndisciplina,nparcelas,condicao,valor,taxa,valorTotal)values (null,?,?,?,?,?,?,?,?,?)");
            //bind value eh filho de PDO eh usada para manipular 
            //valores dentro de estruturas sql
            //substitue? por valores da classe 
            //uma outra maneira de fazer a mesma coisa .ex.:
            //$sql = $this->conexao->prepare(insert into usuario)
            //.'(idusuario,login,senha,tipo)values'
            //(null, '$p->login.','$p->senha','$p->tipo.'
            $sql->bindValue(1,$p->nome);
            $sql->bindValue(2,$p->cpf);
            $sql->bindValue(3,$p->curso);
            $sql->bindValue(4,$p->ndisciplina);
            $sql->bindValue(5,$p->nparcelas);
            $sql->bindValue(6,$p->condicao);
            $sql->bindValue(7,$p->valor);
            $sql->bindValue(8,$p->taxa);
            $sql->bindValue(9,$p->valorTotal);
            $sql->execute();
            $this->conexao=null;//encerra conexao
            
        } catch (PDOException $e) {
            echo 'erro ao cadastrar';
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
        $array=$sql->fetchAll(PDO::FETCH_CLASS,'ClasseMatricula');
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
       public function Deletar($idaluno){
    try{//sql recebe conexao e prepara banco para 
        //receber uma exclusao de dado 
        $sql=$this->conexao->prepare('delete from aluno where idaluno=?');
        //bindValue subistitui ? pelo valor inseridopelo usuarrio
        $sql->bindValue(1,$idaluno);
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

