<?php
class Formatura{
    private $curso;
    private $status;
    function Formatura($curso,$status){
        $this->curso=$curso;
        $this->status=$status;
    }
    function AlunoQI(){
        if($this->curso=='Téc. Informática' && $this->status=="Concluído"){
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
              ."Moisés; Michi; André Tabajara; "
              ."Bárbara; Anderson; Cassio; "
              ."Alan Ew; Marta; Cleusa; Leci;"
              ."Ana Rockemback; Dani; Isabel;"
              ."Rodrigo; Jackson; Róger; Eliane"
              ."Cleber; Paulo; Rachel; Valéria.";
    }
}
?>






