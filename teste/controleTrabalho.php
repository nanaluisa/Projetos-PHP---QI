<html>
	<head>
		<meta charset="utf-8">
		<title>Trabalho Calculadora</title>
	</head>
	<body>
<?php
	include "calculadoraClasseC.php";
	include "calculadoraCA.php";
	
	$c = new Calculadora($_GET['n1'],$_GET['n2']);
	echo $c->toString();
	
	$cCA = new CalculadoraCA();
		$cCA->setN1($_GET['n1']);
		$cCA->setN2($_GET['n2']);
		echo "<br />Resultado da classe com Acessores <br />Soma: ".$cCA->soma().
		"<br />Subtração: ".$cCA->subtracao()."<br />Multiplicação: ".$cCA->multiplicacao().
		"<br />Divição: ".$cCA->divicao()."<br />Porcentagem: ".$cCA->porcento().
		"<br />Fator: ".$cCA->fator()."<br />Expoente: ".$cCA->expo();
	

/*include "pessoaClasse.php";
	$p = new Pessoa($_GET['nome'],$_GET['idade']);
	echo $p->toString();
	*/



?>
</body>
</html>