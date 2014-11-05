<?php
 require '../../Conexion/cred.php';
   $EE24COCR= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee03crrera
where EE24COCR = '$EE24COCR';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Carrera.php");
return;
?>