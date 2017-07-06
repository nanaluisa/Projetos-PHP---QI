<?php 
	//MODELO ORIENTADO: 
	
	//método construtor
	//echo $c->toString();
	
	
	//com Construtor:
	/*include 'calculaClasse.php'; 
	$c= new Calcula(
	$_POST['nota1'],$_POST['nota2']);
		echo $c->getSoma();*/
	
	//com métodos acessores (set e get)
	include 'calculaClasse.php'; 
	$c=new Calcula();
	$c->setNota1($_POST['nota1']);
	$c->setNota2($_POST['nota2']);
	echo $c->getSoma();
	
	
	
	/*
	MODELO ESTRUTURADO:
	
	$n1=1;
	$n2=3;
	
	$soma = $n1+$n2;
	echo $soma;
	*/
	
	
	?>