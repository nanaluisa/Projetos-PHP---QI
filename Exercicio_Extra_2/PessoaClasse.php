<?php
    include_once 'validaClasse.php'; // para inteligar as classes.
class PessoaClasse {
    private $nome;
    private $cpf;
    private $rg;
    private $idade;
    private $data;
    
    
    public function __get ($atrib){
        return $this->$atrib;
     }
    public function __set ($atrib, $value) {
        $this->$atrib=$value;
     }
    
   /* function VerificaErroCpf(){
        if (validaClasse::ValidaCPF($this->cpf)==1){
            return $this->cpf;
        }else {return "Erro em ".$this->cpf;
          }
    }
    function VerificaErroRg(){
        if (validaClasse::ValidaRG($this->rg)==1){
            return $this->rg;
        }else {return "Erro em ".$this->rg;
          }
    }*/

    function __toString() {
        return validaClasse::ValidaNome($this->nome).'</br>'.
            validaClasse::ValidaCPF($this->cpf).'</br>'.
            validaClasse::ValidaRG($this->rg).'</br>'.
            validaClasse::ValidaIdade($this->idade).'</br>'.
            validaClasse::ValidaData($this->data);
    }
        }
