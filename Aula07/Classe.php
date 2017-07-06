<?php

class Classe{
    private $idade;
  
    public function __get ($atrib){
        return $this->$atrib;
     }
    public function __set ($atrib, $value) {
        $this->$atrib=$value;
     }
  }

?>

