<?php

include './Classe/ClasseMatricula.php';
include './Manipula/ClasseManipula.php';

session_start();
session_unset();
switch ($_GET['op']){
    
    case 'Matricular':
        //classe recebe os dados vindos do html
        $u= new ClasseMatricula();
        $u->nome=$_POST['nome'];
        $u->cpf=$_POST['cpf'];
        $u->curso=$_POST['curso'];
        $u->condicao=$_POST['condicao'];
        $u->ndisciplina=$_POST['ndisciplina'];
        $u->idaluno=$_POST['idaluno'];
        $u->nparcelas=$_POST['nparcelas'];
        
        $mu=new ClasseManipula();
        //cadatra recebeos dados da classe principal
        $mu->Matricular($u);
        //dados sao compaquitados e recebidos pelo session
        $_SESSION['dados']= serialize($u);
        //dados da classe sao enviados para o arquivo resposta
        header('location:Resultado/respostaMatricula.php');
                
        break;

    case 'buscar':
        $mu = new ClasseManipula();
        $recebe = array();
        //recebe eh um array que recebe os dados que foram buscados dentro do banco
        $recebe=$mu->Buscar();
        //os daos sao compactados e enviados para
        //um arquivo que mostrara  busca
        $_SESSION['banco']= serialize($recebe);
        header('location:Resultado/buscaMatricula.php');
    
    default:
        echo 'erro no switch - buscar';
        
        break;
    
    case 'deletar':
        $mu = new ClasseManipula();
        //metodo deletar recebe o dado ao ser deletadopelo usuario via post 
        //ou seja esse dado vem de um html
        $mu->Deletar($_POST[idaluno]);
        //eh direcionado para busca verificar se o dado realmente foi deletado
       
        header('location:controleMatricula.php?op=buscar');
        
         break;
     
        default:
            
        echo 'erro no switch - deletar';
        
        break;
}  

?>
