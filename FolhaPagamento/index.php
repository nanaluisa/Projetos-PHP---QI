<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FOLHA DE PAGAMENTO</title>
    </head>
    <body>
        <!-- INDEX parte do "html" página do formulário!-->
        
        	<form action="controle.php" method="get">
			CADASTRO<br />
                       
			Cargo:<br />
                       Padrão <input name="cargo" value="Padrão" type="radio" /> <br />
                       Gerente <input name="cargo" value="Gerente" type="radio" /> <br /><br />
                        Valor Total de Vendas do Mês: R$ <input type="text" name="totalVendas"/> <br /> 
                          <br />
                        Nome Funcionário: <input type="text" name="nome"/> <br />
                        Salário Bruto: R$ <input type="text" name="salarioBruto"/> <br />
                        
                        Vale Transporte:<br />
                        Sim <input name="vt" value="Sim" type="radio" /> <br />
                        Não <input name="vt" value="Não" type="radio" /> <br /><br />
                        
			Vale Refeição:<br />
                        Sim <input name="vr" value="Sim" type="radio" /> <br />
                        Não <input name="vr" value="Não" type="radio" /> <br /><br />
                        
                        Auxílio Creche:<br />
                        Sim <input name="ac" value="Sim" type="radio" /> <br />
                        Não <input name="ac" value="Não" type="radio" /> <br /><br />
                        
			
                        <input type="submit" value="Enviar"/>
		</form>	
	</body>
</html>

</body>
</html>
