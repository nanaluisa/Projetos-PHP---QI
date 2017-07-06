<?php
//posicionamento conforme a ordem de registro.
$x=array();
$x[]='Anna';
$x[]='gabi';
$x[]=5;
$x[]=5.5;
print_r($x); //imprimindo o array.
echo'</br>';
//declarando as posições.
$y=array();
$y[1]='Maria';
$y[3]='josé';
$y[0]=1;
print_r($y);
echo'</br>';

$b=array();
$b['nome']='gabi';
$b['idade']=25;
print_r($b);
?>