<?php
   include 'pessoaClasse.php'; //"import" 
	$p=new Pessoa(); //estagi�rio (m�todo construtor invis�vel na classe)
	$p->setNome($_GET["nome"]/*argumento, caixa de texto. P, recebe todas as inf. da classe*/);
	echo $p->getNome();//t� no this, retornando o valor mas n�o exibe na tela, tenho que criar echo.
	$p->setIdade($_GET["idade"]);
	echo $p->getIdade();
	
	
	
	/*
	M�TODO DIRETO PELO CONSTRUTOR, UTILIZANDO TOSTRING
	<?php
	include 'pessoaClasse.php'; 
	$p=new Pessoa(
	$_POST['nome'], $_POST['idade']); 
	
	echo $p->toString();
	?>
	*/
	
	
	//---------- EXEMPLO -----------------------------
	/*//vetores-array:
	$nm=$_GET["nome"];
	$id=$_GET["idade"];
	//pegando o valor do html e mostrando na tela:
	echo $nm;
	echo "<br />";
	echo $id;*/
   //-------------------------------------------------	
?>