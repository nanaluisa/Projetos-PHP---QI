
<?php 
//frente da camiseta
class Formatura {
    private $aluno;
    private $curso;
    private $status;    
}
 function Formatura(){
    if($aluno=='QI' && $curso=='TI' && $status=='Concluído'){
        return formandos2016();
    }else{
        return "Continuar estudando...";
    }

//costas da camiseta
function formandos2016(){
    echo "Anna Luísa, Tanize Cardoso, ....";
}
    
    
    
    
    
 }