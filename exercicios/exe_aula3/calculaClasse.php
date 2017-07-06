<?php	

// --------------------- 1ª maneira (Acessores Get e Set) -----------------------
	class Calcula {
		Private $nota1;
		Private $nota2;
		
		public function Calcula(){ //métodos acessores.
		}
		
		public function setNota1($nota1){ 
			$this->nota1=$nota1 ;
		}
		public function setNota2($nota2){
			$this->nota2=$nota2 ;
		}
		
		public function getSoma(){
			return (($this->nota1)+($this->nota2));
		}	
	}		
			
/*
		--------------2ª maneira (Construtor)---------------------
	class Calcula {
		Private $nota1;
		Private $nota2;
		
		
		public function Calcula($nota1,$nota2){
			$this->nota1=$nota1 ;
			$this->nota2=$nota2 ;
		}
		
		public function toString(){
			$soma = ($this->nota1)+($this->nota2) ;	
			return "Nota1: ".$this->nota1.
			"Nota 2:"$this->idade;
		}
	}
*/
		
		
?> 
