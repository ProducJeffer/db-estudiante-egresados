<?php
 require '../../Conexion/cred.php';
   $EE36COGR= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee04grado
where EE36COGR = '$EE36COGR';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Grado.php");
return;
?>