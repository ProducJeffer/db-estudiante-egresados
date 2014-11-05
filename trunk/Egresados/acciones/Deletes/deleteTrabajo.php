<?php
 require '../../Conexion/cred.php';
   $EE08COTR= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee06trabjo
where EE08COTR = '$EE08COTR';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Trabajos.php");
return;
?>