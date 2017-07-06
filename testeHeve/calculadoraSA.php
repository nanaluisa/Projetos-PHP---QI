<?php
	class CalculadoraSA{
		private $n1;
		private $n2;
		
		
		public function CalculadoraSA($n1, $n2){
			$this->n1 = $n1;
			$this->n2 = $n2;
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
			return ($this->n1/$this->n2);
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
		
		public function toString(){
			return "Número 1: ".$this->n1."<br />Número 2: ".$this->n2."<br /> Resultado da Classe SEM ACESSORES: <br/>
			Soma: ".$this->somar()."<br /> Subtração: ".$this->subtrair().
			"<br /> Multiplicação: ".$this->multiplicar()."<br /> Divisão: ".$this->dividir()."<br /> Porcentagem: ".$this->porcentagem()."<br /> Fatoração: ".$this->fatoração()."<br /> Exponencial: ".$this->exponencial();
		}
		
	}



?>