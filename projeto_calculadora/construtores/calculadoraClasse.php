<?php 
class Calculadora {
		Private $n1;
		Private $n2;
						
		public function Calculadora($n1,$n2){	//método construtor
			$this->n1=$n1 ;
			$this->n2=$n2 ;
		}
		public function fatn1(){
			$aux=1;
			for($i=1;$i<=$this->n1;$i++){
				 $aux=$aux*$i;
			}return $aux;
		}
		public function fatn2(){
			$aux=1;
			for($i=1;$i<=$this->n2;$i++){
				 $aux=$aux*$i;
			}return $aux;
		}
		public function toString(){
			$soma = (($this->n1)+($this->n2));
			$subtracao = (($this->n1)-($this->n2));
			$divisao = (($this->n1)/($this->n2));
			$formato = "%.2f";
			$multiplicacao = (($this->n1)*($this->n2));
			$exponencial = (pow($this->n1,$this->n2)) ;
			$percentual = ((($this->n1)*($this->n2))/100);
		
			echo "Número 1: ".$this->n1."    |   Número 2: ".$this->n2."</br>".
			"Soma: ".$soma."</br>".
			"Subtração: ".$subtracao."</br>".
			"Multiplicação: ".$multiplicacao."</br>".
			"Divisão: ";
			printf ($formato , $divisao);
			echo"</br>"."Exponencial: ".$exponencial."</br>".
			"Percentual: ".$percentual."</br>".
			"Fatorial N1: ".$this->fatn1()."</br>".
			"Fatorial N2: ".$this->fatn2();
			
			
		}
	}

?>