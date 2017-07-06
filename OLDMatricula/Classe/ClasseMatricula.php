<?php

class ClasseMatricula {
      private $idaluno;
      private $nome;
      private $cpf;
      private $curso;
      private $ndisciplina;
      private $nparcelas;
      private $condicao;
      private $valor;
      private $taxa;
      
      
      public function __construct() {
          
      }
       public function __set($name, $value) {
          return $this->$name=$value;
      }
      public function __get($name) {
          return $this->$name;
      }

      function verValor(){
            $this->valor=350.00;
            $this->taxa=120.00;
            if ($this->condicao =="parcelado"){
                return (((($this->valor * 0.05)+($this->valor*$this->ndisciplina))+$this->taxa)/$this->nparcelas);
            //(($this->valor * $this->ndisciplina)+($this->valor*0.05)/$this->nparcelas);
           }else{
               return (($this->valor * $this->ndisciplina)+$this->taxa);
           }
           }
      
           
      public function __toString() {
          return "<h2> Aluno: ".$this->idaluno."</h2>".
                  "Nome: ".$this->nome."</br>".
                  "Cpf: ".$this->cpf."</br>".
                  "Curso: ".$this->curso."</br>".
                  "Nº de Disciplina: ".$this->ndisciplina."</br>".
                  "Condição de Pagamento: ".$this->condicao."</br>".
                  "Ver valor: R$ ".$this->verValor();
      }

    
      /*function verFunc(){
            if($this->cargo == "gerente"){
                return $this->salarioBruto+($this->vendas*0.15);
            }else{
                return $this->salarioBruto;
            }
        }
        function insalubridade(){
            return $this->salarioBruto*0.20;
        }
        function abono(){
            if($this->cargo!="padrao"){
                return $this->vendas*0.08;
            }else{return 0;}
        }
        function inss(){
            return $this->salarioBruto*0.11;
        }
        function vt(){
            if($this->vt=="sim"){
            return $this->salarioBruto*0.06;
        }else{return 0;}
        }
        function vr(){
            if($this->vr=="sim"){
            return $this->salarioBruto*0.10;
        }else{return 0;}
        }
        function ac(){
            if($this->ac=="sim"){
            return $this->salarioBruto+250.00;
        }else{return 0;}
        }       */
      
      
      
      
      
}
