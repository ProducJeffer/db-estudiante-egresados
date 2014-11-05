<?php
 require '../../Conexion/cred.php';
   $EE28COES= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee02estdio
where EE28COES = '$EE28COES';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Estudios.php");
return;
?>