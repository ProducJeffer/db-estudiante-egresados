<?php
 require '../../Conexion/cred.php';
   $EE01COCN= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee01estegr
where EE01COCN = '$EE01COCN';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Estudiantes.php");
return;
?>