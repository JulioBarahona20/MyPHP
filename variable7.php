<?php
//declarando el arreglo e imprimiendo un valor;
   $arreglo=array(1,2,3,4);
   print $arreglo[0]."<br>";
   //print_r imprime la estructura de un elemento
   print "<pre>";
   print_r ($arreglo);
   print "</pre>";
   //Agregamos un valor al arreglo
   $arreglo[]=49;
   //Revisamos como queda el array
   print "<pre>";
   print_r ($arreglo);
   print "</pre>";
   $arreglo{10}=25;
   $arreglo[]='Juan';
   print"<pre>";
   print_r($arreglo);
   print"</pre>";
   print $arreglo[5]."<br>";
?>