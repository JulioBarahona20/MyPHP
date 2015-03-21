<?php
//Declarando el arreglo e imprimiendo un valor;
  $arreglo=array ('nombre'=>'Juan',
  	              'appellido'=>'Perez',
  	              'genero'=>'m');
print $arreglo['appellido']."<br>";
//Print_r imprime la estructura de un elemento
print "<pre>";
print_r($arreglo);
print "</pre>";
//Arreglamos un valor al arreglo
$arreglo['edad']=49;
//Revisamos como queda el array
print "<pre>";
print_r($arreglo);  
print "</pre>";
$arreglo['hobbies']=array('leer','videojuegos','golf');
print "<pre>";
print_r($arreglo);
print"</pre>";
print $arreglo[5]."<br>";
?>