<?php
class Formatura{
    private $curso;
    private $status;
    function Formatura($curso,$status){
        $this->curso=$curso;
        $this->status=$status;
    }
    function AlunoQI(){
        if($this->curso=='T�c. Inform�tica' && $this->status=="Conclu�do"){
            return Formandos2016();
        }else{
            return "Continue estudando...";
      }
    }
  }
?>

    
 <?php
class Formandos2016{
    
    function Formandos2016(){
        return "Patricia; Salma; Fernando; "
              ."Anna Luisa; Tanize; Gilmar; "
              ."Mois�s; Michi; Andr� Tabajara; "
              ."B�rbara; Anderson; Cassio; "
              ."Alan Ew; Marta; Cleusa; Leci;"
              ."Ana Rockemback; Dani; Isabel;"
              ."Rodrigo; Jackson; R�ger; Eliane"
              ."Cleber; Paulo; Rachel; Val�ria.";
    }
}
?>






