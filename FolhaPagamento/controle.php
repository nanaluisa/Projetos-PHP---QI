<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Folha de Pagamento</title>
    </head>
    <body>
        <?php
        include 'Salario.php';
        $s= new Salario($_GET['nome'],$_GET['cargo']);
      //  echo $s;
      

	 
        $s->salarioBruto=$_GET['salarioBruto']; //isto já é um método SET!!
        $s->totalVendas=$_GET['totalVendas'];//$_GET têm a ver com o method do html (get ou post)!
        $s->vt=$_GET['vt'];//"$_GET['vt']" ESSE valor vem do INDEX!(HTML) e "$s->vt" 
        $s->vr=$_GET['vr'];
        $s->ac=$_GET['ac'];
      
        echo $s;  // método mágico com __toString() na classe;
        /*
            ou imprimir direto aqui na classe como echo e $s(representante da classe no controle!)
            echo "----- RELATÓRIO -----"."</br>"."</br>".
                "Função: ".$s->cargo."</br>".
                "Valor de Vendas: R$ ".$s->totalVendas."</br>".
                "Nome: ".$s->nome."</br>".
                "Salário Bruto: R$ ".$s->salarioBruto."</br>".
                "Vale Transporte: ".$s->vt."</br>".
                 "Vale Refeição: ".$s->vr."</br>".
                "Auxílio Creche: ".$s->ac."</br>".
                "Total de Proventos: R$ ".$s->TotalProventos()."</br>".
                "Total de Descontos: R$ ".$s->TotalDescontos()."</br>".
                "Salário Liquido: R$".$s->SalarioLiquido(); 
     */
  
	?>
	
</body>
</html>
        
        
        
        
        
