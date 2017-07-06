<?php

class ClasseMatricula {
      private $nome;
      private $cpf;
      private $curso;
      private $condicao;
      private $ndisciplina;
      private $idaluno;
      private $valor;
      private $valorTotal;
      private $nparcelas;
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
          $this->valor = 350.00;
          $this->taxa = 120.00;
          if ($this->condicao == "avista") {
            $this->valorTotal = (($this->valor * $this->ndisciplina)+$this->taxa);
        } else {
           $this->valorTotal = ((($this->valor * $this->ndisciplina) + ($this->valor * 0.05))+($this->taxa));

  // VALOR DA PARCELA: $this->valorTotal = (((($this->valor * $this->ndisciplina) + ($this->valor * 0.05))+($this->taxa))/$this->nparcelas);
        }
        return $this->valorTotal;
      
      }
     
      public function __toString() {
          return "<h2> Aluno: ".$this->idaluno."</h2>".
                  "Nome: ".$this->nome."</br>".
                  "Cpf: ".$this->cpf."</br>".
                  "Curso: ".$this->curso."</br>".
                  "Nº de Disciplina: ".$this->ndisciplina."</br>".
                  "Condição de Pagamento: ".$this->condicao."</br>".
                  "valor Total: ".$this->verValor();
      }
    
      
      
      
      
}
