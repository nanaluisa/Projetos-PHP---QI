<?php
	class CalculadoraCA{
		private $nota1;
		private $nota2;
		
		public function CalculadoraCA(){
		
		}		
		public function setN1($n1){
			$this->nota1=$n1;
		}
		public function getN1(){
			return $this->n1;
		}
		public function setN2($n2){
			$this->nota2=$n2;
		}
		public function getN2(){
			return $this->n2;
		}
		public function soma(){
			return ($this->nota1 + $this->nota2);
		}
		public function subtracao(){
			return ($this->nota1 - $this->nota2);
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
			$aux = 1;
			for($i=1; $i<=$this->nota2; $i++){
				$aux = $aux * $this->nota1;
			}
			return $aux;
		}
	}


?>