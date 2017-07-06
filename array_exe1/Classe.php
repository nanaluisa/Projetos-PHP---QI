<?php


class Classe {

    public static function Exibir($valor){
        echo"O tamanho total do array é:".count($valor)."</br>";
            foreach ($valor as $v){
                echo $v.'<br/>';
        }
    }
}
?>