<p>foreach con arreglo de una dimension </p>
<?php
  $arreglo=array('nombre'=>'Juan',
  	             'apellido'=>'Perez',
  	             'genero'=>'m');
  foreach ($arreglo as $dato) {
    	print $dato."<br>";
    }  
?>
<p>Foreach con arreglo de multidimension</p> 
<?php
   $comidas=array('desayuno'=>array('Cereal','Tostada'),
   	             'almuerzo'=>array('Sopa','Paella'),
   	             'cena'=>array('Pizza','Papas Fritas'));

   foreach ($comidas as $dato => $datos) {
            print '<br><b>Menu para el<br>'.$dato.'</b>';
            print '<hr>';
           foreach ($datos as $plato ) {
            	print $plato.'<br>';
            } 
    }                
?>