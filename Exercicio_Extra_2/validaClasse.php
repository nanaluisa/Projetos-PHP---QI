<?php

class validaClasse {
        
    public static function ValidaCPF($valor){
        //self::$a;
        $exp='/^[0-9]{11}$/';
        if(preg_match($exp,$valor)){
            return "CPF: ".$valor;
        }else {
            return "Você errou algum dígito no campo: CPF";
        }
    }
     public static function ValidaRG($valor){
        //self::$a;
        $exp='/^[0-9]{10}$/';
        if(preg_match($exp,$valor)){
            return"RG: ". $valor;
        }else {
            return "Você errou algum dígito no campo: RG";
        }
    }
    
    public static function ValidaIdade($valor){
        //self::$a;
        $exp='/^[0-9]{2}$/';
        if(preg_match($exp,$valor)){
            return "IDADE: ". $valor;
        }else {
            return "Você errou algum dígito no campo: IDADE";
        }
    }
    public static function ValidaNome($valor){
        //self::$a;
        $exp='/^[A-Za-z]{2,50}$/';
        if(preg_match($exp,$valor)){
            return "NOME: ".$valor;
        }else {
            return "Você errou algum dígito no campo: NOME";
        }
    }
    public static function ValidaData($valor){
        //self::$a;
        $exp='/([1-9]|0[1-9]|[1,2][0-9]|3[0,1])/([1-9]|1[0,1,2])/\d{4}$/';
//    $exp='/^\d{1,2}\/\d{1,2}\/\d{4}$/';
        
//        $exp='/^([1-9]|0[1-9]|[1,2][0-9]|3[0,1])/([1-9]|1[0,1,2])/|d{4)$/';
        if(preg_match($exp,$valor)){
            return "DATA: ". $valor;
        }else {
            return "Você errou algum dígito no campo: DATA";
        }
    }
    
}
?>