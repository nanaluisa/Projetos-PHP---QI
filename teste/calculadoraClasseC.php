<?php
	class Calculadora{
		private $nota1;
		private $nota2;
		
		public function Calculadora($n1,$n2){//construtor
			$this->nota1=$n1;
			$this->nota2=$n2;
		}
		public function toString(){
			$soma = $this->nota1 + $this->nota2;
			$subtracao = $this->nota1 - $this->nota2;
			return "Nota 1: ".$this->nota1."<br />Nota 2: ".$this->nota2.
			"<br />Resultado da classe sem Acessores<br />Soma: ".$soma.
			"<br />Subtação: ".$subtracao."<br />Multiplicação: ".$this->multiplicacao().
			"<br />Divição: ".$this->divicao()."<br />Fatorial: ".$this->fator().
			"<br />Porcento: ".$this->porcento()."<br />Expoente: ".$this->expo();
		}
		public function multiplicacao(){
			return ($this->nota1 * $this->nota2);
		}
		public function divicao(){
			return ($this->nota1 / $this->nota2);
		}
		public function fator(){
			$aux = 1;
			for($i=1; $i<=$this->nota1; $i++){
				$aux = $aux * $i;
			}
			return $aux;
		}
		public function porcento(){
			return ($this->nota1 *($this->nota2/100));
		}
		public function expo(){
			$aux=1;
			for($i=1; $i<=$this->nota2; $i++){
				$aux = $aux*$this->nota1;
			}
			return $aux;
		}
		
	}







