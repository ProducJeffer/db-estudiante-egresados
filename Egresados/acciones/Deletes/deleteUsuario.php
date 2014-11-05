<?php
 require '../../Conexion/cred.php';
   $EE39CDUS= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee08usuario
where EE39CDUS = '$EE39CDUS';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Usuarios.php");
return;
?>