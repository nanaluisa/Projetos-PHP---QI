<?php
	include "CalculadoraSA.php";
	include "CalculadoraCA.php";
	
		
	$cCA = new CalculadoraCA();
	$cCA->setN1($_GET['n1']);
	$cCA->setN2($_GET['n2']);
	echo "Resultados da Classe COM ACESSORES <br /> Soma: ".$cCA->somar()."<br />Divisão: ".$cCA->subtrair().
	"<br />Multiplicação: ".$cCA->multiplicar()."<br />Divisão: ".$cCA->dividir()."<br />Porcentagem: ".$cCA->porcentagem()."<br />Exponencial: ".$cCA->exponencial()."<br />Fatoral: ".$cCA->fatoração();
	
	echo "<br /> <br /> <br /> ";
	
	$cSA = new CalculadoraSA($_GET['n1'],$_GET['n2']);
	echo $cSA->toString();

?>