<?php
 require '../../conexionBD/cecndb.php';
   $vCOPR= $_GET["id"];
 	$SQLstr = "DELETE FROM ee01estegr WHERE EE01COCN = '$vCOPR'";
    if (!$conectarBD->query($SQLstr))
    {
        echo " Problemas al relizar el delete: (" . $conectarBD->errno . ") " . $conectarBD->error;
    }
 
    $conectarBD->close();
	require 'index.php';
?>