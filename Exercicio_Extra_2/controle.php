<?php

include 'PessoaClasse.php';
$p = new PessoaClasse();
//$resp=PessoaClasse::validaClasse($_POST['valor'],$exp);

$p->cpf=$_POST['cpf'];
$p->nome=$_POST['nome'];
$p->rg=$_POST['rg'];
$p->idade=$_POST['idade'];
$p->data=$_POST['data'];

header("location:resposta.php?resp=$p");


?>

