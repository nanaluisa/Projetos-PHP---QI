<?php

include_once 'Classe.php';
class ClasseValida {
    
     public static function ValidaCPF($valor){
        //self::$a;
        $pessoa='/^[0-9]{11}$/';
        if(preg_match($pessoa,$valor)){
            return $valor;
        }else {
            return "Ocorreu algum erro em CPF ! Por favor, corrija para o envio correto!";
        }
    }
     public static function ValidaMatricula($valor){
        $pessoa='/^[0-9]{10}$/';
        if(preg_match($pessoa,$valor)){
            return $valor;
        }else {
            return "Ocorreu algum erro em MATRÍCULA ! Por favor, corrija para o envio correto!";
        }
    }
    
    public static function ValidaIdade($valor){
        //self::$a;
        $pessoa='/^[0-9]{2}$/';
        if(preg_match($pessoa,$valor)){
            return $valor;
        }else {
            return "Ocorreu algum erro em IDADE ! Por favor, corrija para o envio correto!";
        }
    }
    public static function ValidaNome($valor){
        //self::$a;
        $pessoa='/^[a-zA-Z]{50}$/';
        if(preg_match($pessoa,$valor)){
            return "Ocorreu algum erro em NOME ! Por favor, corrija para o envio correto!";
        }else {
            return $valor;
        }
    }

    public static function ValidaCidade($valor){
        
        if($valor=="cidade"){
            return "Escolha uma Cidade";
        }else {
            return $valor;
        }
    }
}

?>