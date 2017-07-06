<?php
include_once 'Classe.php';
$c = new Classe();
$a=$c->Dados($_GET['nome'],$_GET['matricula'],$_GET['idade'],$_GET['cpf'],$_GET['cidades']);



header("location:resposta.php?pessoa=$a");


?>