<?php
class  Pessoa{ //classe é o chefe.
	private $nome;
	private $idade;
	
	public function pessoa(){ //mensageiro para o estagiário q está em controle.
		
	}
	public function setNome($nome){
		$this->nome=$nome ;
	}
		
	public function setIdade($idade){
		$this->idade=$idade;
	}
	public function getNome($nome){
		$this->nome=$nome ;
	}
	
		public function getIdade($idade){
		$this->idade=$idade;
	}
	
	/*
	O '$nome' que está no argumento setNome($nome) não é o mesmo do atributo,declarado lá em cima!
	public function setNome($batata){
		$this->nome = $batata ;
	}*/
	
}

		/*get e set são usados normalmente quando não há um padrao de instruçao 
		para uma classe .quandos temos padroes e estabelecemos q um dado sempre
		sera visto ou registrado podemos utilizar apenas o metodo construtor 
		acompanhando do metodo toString.*/
	/*
	<?php	
	class Pessoa {
		Private $nome;
		Private $idade;
		public function pessoa($nome,$idade){
			$this->nome=$nome ;
			$this->idade=$idade ;
			
		}
		public function toString(){
			return "Nome:<br />".$this->nome.
			"idade:"$this->idade;
		}
	?> */





?>