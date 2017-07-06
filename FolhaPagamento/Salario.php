<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of salario
 *
 * @author ANNA LUISA
 */
class Salario {
    
    private $nome;
    private $salarioBruto;
    private $salarioLiquido;
    private $cargo;
    private $totalVendas;
    private $vt;
    private $vr;
    private $ac;
    private $inss;
    private $insalub;
    private $abono;
    
    
     function __construct($nome, $cargo){
         $this->nome=$nome;
         $this->cargo=$cargo;
     }   
     function __get ($atrib){
        return $this->$atrib;
     }
     function __set ($atrib, $value) {
        $this->$atrib=$value;
     }
    
     function VerificaCargo(){
         if($this->cargo == "gerente"){
             return $this->salarioBruto+($this->totalVendas*0.15);
         }else{
         return $this->slarioBruto;
     }
     }
     function Insalub(){
        return $this->salarioBruto*0.20 ;
     }
      function Abono(){
          return $this->salarioBruto*0.8;
     }
     function Inss(){
         return $this->salarioBruto*0.11;
     }
     function Trans(){
        if($this->vt == "sim"){
         return $this->salarioBruto*0.6;
        }else{ 
            return 0;
        }
     }
     function Ref(){
          if($this->vr == "sim"){
         return $this->salarioBruto*0.10;
        }else{ 
            return 0;
        } 
      }
     function Creche(){
         if ($this->ac =="sim"){
         return 250.00;
         }else {
             return 0;
         }
     }
     function TotalProventos(){
          return $this->Insalub()+$this->Abono()+$this->Creche();   
     } 
     function TotalDescontos(){
         return $this->Inss()+$this->Ref()+$this->Trans(); 
     }
     function SalarioLiquido(){
         return $this->salarioBruto+$this->TotalProventos()-$this->TotalDescontos();
     }


     function __toString(){
       return "----- RELATÓRIO -----"."</br>"."</br>".
                "Função: ".$this->cargo."</br>".
                "Valor de Vendas: R$ ".$this->totalVendas."</br>".
                "Nome: ".$this->nome."</br>".
                "Salário Bruto: R$ ".$this->salarioBruto."</br>".
                "Vale Transporte: ".$this->vt."</br>".
                 "Vale Refeição: ".$this->vr."</br>".
                "Auxílio Creche: ".$this->ac."</br>".
                "Total de Proventos: R$ ".$this->TotalProventos()."</br>".
                "Total de Descontos: R$ ".$this->TotalDescontos()."</br>".
                "Salário Liquido: R$".$this->SalarioLiquido();
                
       
        
    }
    
  }

?>