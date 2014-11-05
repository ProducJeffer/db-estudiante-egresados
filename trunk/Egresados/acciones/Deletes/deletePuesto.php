<?php
 require '../../Conexion/cred.php';
   $EE12COPU= $_GET["id"];
 	$SQLstr = "delete
from db_proyectoegresados.ee07puesto
where EE12COPU = '$EE12COPU';";
	
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->error . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	header("location:http:Puesto.php");
return;
?>