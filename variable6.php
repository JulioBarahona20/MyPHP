<p> Ciclo generado con for</p>
<?php
  for ($i=0; $i < 10; $i++){
  	print $i .'&nbsp;';
  }

?>
<p>Ciclo Generando con While</p>
<?php
    $i=0;
    while ($i<=10){
    	print $i.'&nbsp;';
    	$i++;
    }  
?>
<p>Ciclo generando con Do - While</p>    

<?php
    $i=0;
    do {
    	print $i.'&nbsp;';
    	$i++;
    }while ($i<=10);
?>