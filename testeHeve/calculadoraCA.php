<?php
	
	class CalculadoraCA {
		private $n1;
		private $n2;
		
		public function CalculadoraCA(){
			
		}
		
		public function setN1($n1){
			$this->n1 = $n1;
		}
		
		public function getN1(){
			return $this->n1;
		}
		
		public function setN2($n2){
			$this->n2 = $n2;
		}
		
		public function getN2(){
			return $this->n2;
		}
		
			
		public function somar(){
			return ($this->n1 + $this->n2);
		}
		
		public function subtrair(){
			return ($this->n1 - $this->n2);
		}
		
		public function multiplicar(){
			return ($this->n1*$this->n2);
		}
		
		public function dividir(){
			if($this->n1 > $this->n2){
				return ($this->n1 / $this->n2);
			} else {
				return ($this->n2 / $this->n1);
			}
		}
		
		public function porcentagem(){
			return ($this->n1 * ($this->n1/100));
		}
		
		public function fatoração(){
			$aux = 1;
			for(i=1, i=$this->n1, i++){
				$aux = $aux*i;				
			}
			return $aux;
		}
		
		public function exponencial(){
			$aux=1;
			for(i=1, i=$this->n2, i++){
				$aux = $this->n1*i;
			}
			return $aux;
		}
		
	}


?>