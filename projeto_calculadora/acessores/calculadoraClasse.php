<?php

class Calculadora{
	Private $n1;
	Private $n2;
	
	public function Calculadora(){ //métodos acessores.
	}
		public function setN1($n1){ 
			$this->n1=$n1 ;
		}
		public function setN2($n2){
			$this->n2=$n2 ;
		}
		public function getN1(){ 
			return $this->n1 ;
		}
		public function getN2(){
			return $this->n2 ;
		}
		public function getSoma(){
			return (($this->n1)+($this->n2));
		}	
	
		public function getSubtracao(){
			return (($this->n1)-($this->n2));
		}	
		
		public function getMultiplicacao(){
			return (($this->n1)*($this->n2));
		}	
		
		public function getDivisao(){
			return (($this->n1)/($this->n2));
		}
		public function getExponencial(){
			return (pow($this->n1,$this->n2));
		}
		public function getPercentual(){
			return ((($this->n1)*($this->n2))/100);
		}	
		public function getFatorialN1(){
			$aux=1;
			for($i=1;$i<=$this->n1;$i++){
				 $aux=$aux*$i;
			}return $aux;
		}
		public function getFatorialN2(){
			$aux=1;
			for($i=1;$i<=$this->n2;$i++){
				 $aux=$aux*$i;
			}return $aux;
		}
		/*public function getFormato(){
		//	return ($this->formato="%.2f");
		//}*/
	
	}

?>