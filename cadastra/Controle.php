<?php
//controle externo
include './Classe/ClassePrincipal.php';
include './Manipula/ManipulaClasse.php';
session_start();
session_unset();
switch ($_GET['op']) {
     case 'cadastrar':
        //salvando os dados dentro da classe
        //classe principal recebe os dados vindos do html
        $u= new ClassePrincipal();
        $u->login=$_POST['login'];
        $u->senha=$_POST['senha'];
        $u->tipo=$_POST['tipo'];
       
        //enviando os dados da classe pricipal
        //para dentro da classe manipula, que 
        //irá inserir os dados no banco
        $mu= new ManipulaClasse();
        //cadastra recebe os dados da classe principal
        $mu->Cadastra($u);
       //cadastra recebe os dados da classe principal  //pegando dados da classe principal 
        //dados são compactados e recebidos pela session (inserindo dentro de session para exibir)
        $_SESSION['dados']= serialize($u);  //serialize "compacta" ! unserialize "descompacta"!
        //dados da classe são enviados para um arquivo resposta
        header('location:Resultado/resposta.php');
       break;
       case 'buscar':
         $mu = new ManipulaClasse();
         $recebe = array();
         //recebe é um array que recebe os dados que foram buscados dentro do banco
         $recebe =$mu->Buscar();
         //os dados são compactados e enviados para um arquivo que mostrará a busca
         $_SESSION['banco']= serialize($recebe);
         header('location:Resultado/busca.php');
       break;     
     case 'deletar':
         $mu=new ManipulaClasse();
         //metodo deletar recebe dado a ser deletado pelo usuario via post, ou seja, esse dado vem de um html
         $mu->Deletar($_POST['idusuario']);
         //é direcionado para busca para verificar se o dado realmente foi deletado! 
                 header('location:Controle.php?op=buscar');
   
     break; 
        default:
        echo 'Erro no switch';
       break;
}
?>