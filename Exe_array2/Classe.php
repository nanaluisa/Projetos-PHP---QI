<?php

class Classe {
   
    private $pessoa=array();
    
    function Dados($nome, $matricula,$idade, $cpf, $cidades){
        $this->pessoa['nome']=  ClasseValida::validaNome($nome);
        $this->pessoa['matricula']=  ClasseValida::validaMatricula($matricula);
        $this->pessoa['idade']=  ClasseValida::validaIdade($idade);
        $this->pessoa['cpf']=  ClasseValida::validaCpf($cpf);
        $this->pessoa['cidade']=  ClasseValida::validaCidade($cidades);
        return $this->pessoa;
        
    }
}
    
    //este era o modelo sem array.
    /*private $nome;
    private $matrícula;
    private $idade;
    private $cpf;
    private $cidades;
    
    public function __get ($atrib){
        return $this->$atrib;
     }
    public function __set ($atrib, $value) {
        $this->$atrib=$value;
     }
    
   
    function __toString() {
        return validaClasse::ValidaNome($this->nome).'</br>'.
            validaClasse::ValidaCPF($this->cpf).'</br>'.
            validaClasse::ValidaRG($this->rg).'</br>'.
            validaClasse::ValidaIdade($this->idade).'</br>'.
            validaClasse::ValidaData($this->data);
    }
       
  }*/
  ?>