<?php
 require '../../Conexion/cred.php';
   $EE17COIN= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee05instcn
where EE17COIN = '$EE17COIN';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Institucion.php");
return;
?>