<?php
include_once 'Alumno.php';
class AlumnoControlador extends Alumno {
	public function guardarDatos ($objAlumno) {
		$varibleSql = "INSERT INTO Alumno.Alumno";
		$varibleSql .= "(id,nombre,apellidos,fecha_nacimiento,";
		$varibleSql .= "direccion,cartnet)";
        $varibleSql .=".".$objAlumno[0]."',";
        $varibleSql .=".".$objAlumno[1]."',";
        $varibleSql .=".".$objAlumno[2]."',";
        $varibleSql .=".".$objAlumno[3]."',";
        $varibleSql .=".".$objAlumno[4]."',";
        $varibleSql .=".".$objAlumno[5]."');";

        $bandera = mysql_query($varibleSql);

        if ($bandera) {
        	$msg = "Datos almacenados";
        }else{
        	$msg = "Error al almacenar los Datos # de error: ";
        	$msg = mysql_errno();
        	$msg = "<br>";
        	$msg = mysql_error();
        }
        return $msg;
	}
}
?>