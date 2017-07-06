<html>
	<head>
		<meta charset= "utf-8"/>
		<title> Aula 4 - Trabalho Calculadora </title>
</head>
<body>

<?php
//com Construtor:
	include 'calculadoraClasse.php'; 
	$c= new Calculadora(
	$_POST['n1'],$_POST['n2']);
		echo $c->toString();
		//echo $c->fatn1();
		//echo $c->fatn2();
	
	?>
	
</body>
</html>