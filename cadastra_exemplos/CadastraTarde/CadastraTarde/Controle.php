<?php
include 'Classe/ClassePrincipal.php';
include 'Manipula/ManipulaClasse.php';
session_start();
session_unset();
switch($_GET['op']){
    case 'cadastrar':
        //salvando os dados dentro da
        //classe principal
        $u = new ClassePrincipal();
        $u->login=$_POST['login'];
        $u->senha=$_POST['senha'];
        $u->tipo=$_POST['tipo'];
        
        //enviando os dados da classe pricipal
        //para dentro da classe manipula, que 
        //irá inserir os dados no banco
        $mu=new ManipulaClasse();
       $mu->Cadastrar($u);
        
        //pegando dados da classe principal 
        //inserindo dentro de session para exibir
        $_SESSION['dados']=  serialize($u);
        header('location:Resultado/resposta.php');

    break;
    default:
        echo 'Erro no switch';
    break;
}
