<?php
include 'classe.php';
  $exp='/^[a-zA-Z]{1,3}$/' ;
//$c = new Classe($_GET['valor'])  ;
//$c->valor = $_POST['valor'];
//header("location:resposta.php?valor=".$c->valor);
  $resp=classe::valida($_POST['valor'], $exp);
  header("location:resposta.php?resp=.$resp");



?>


