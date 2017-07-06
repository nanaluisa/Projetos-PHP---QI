<html>
	<head>
		<meta charset="utf-8"/>
		<title> Aula 4 - Trabalho Calculadora </title>
</head>
<body>

<?php
ini_set('default_charset', 'UTF-8');
//com métodos acessores (set e get)
	include 'calculadoraClasse.php'; 
	$c=new Calculadora();
	$c->setN1($_POST['n1']);
	$c->setN2($_POST['n2']);
	
	echo
	"Número 1: ".$c->getN1()."    |   Número 2: ".$c->getN2()."</br>".
	"Soma: ".$c->getSoma()."</br>".
	"Subtração: ".$c->getSubtracao()."</br>".
	"Divisão: ".$c->getDivisao()."</br>".
	"Multiplicação: ". $c->getMultiplicacao()."</br>".
	"Exponencial: ". $c->getExponencial()."</br>".
	"Percentual: ". $c->getPercentual()."</br>".
	"Fatorial N1: " .$c->getFatorialN1()."</br>".
	"Fatorial N2: ". $c->getFatorialN2();
	
	
?>
	</body>
</html>