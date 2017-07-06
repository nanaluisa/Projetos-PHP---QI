<?php
include 'Classe.php';
$c = new Classe()  ;
$c->idade = $_POST['idade'];
header("location:resposta.php?idade=".$c->idade);

?>

