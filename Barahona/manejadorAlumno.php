<?php
include './Clases/Coneccion.php';
include './Clases/AlumnoControlador.php';

$con = new Coneccion();
$AlumnoA = new AlumnoControlador();

if ($con->conectar()){
	
} else {
	print $con->conectar();
}

if(isset($_REQUEST['bot'])){
	
} else {
	print 'No se ha enviado datos ';
}

$alumnoA->setId('Null');
$alumnoA->setNombre($_REQUEST['nombre']);
$alumnoA->setApellido($_REQUEST['apellido']);
$alumnoA->setCarnet($_REQUEST['carnet']);
$alumnoA->setDir($_REQUEST['dir']);
$alumnoA->FechaNac($_REQUEST['fecha_nac']);
$alumnoA->setSeccion($_REQUEST['seccion']);

$datosObj=array($alumnoA->getId(),
$alumnoA->getNombre(),
$alumnoA->getApellido(),
$alumnoA->getFechaNac(),
$alumnoA->getDir(),
$alumnoA->getCarnet()
);

print $alumnoA->guardarDatos($datosObj);