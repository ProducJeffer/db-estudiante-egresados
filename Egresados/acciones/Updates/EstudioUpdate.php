<?php
require '../tool/config.php';
 $vCOES=$_REQUEST["codigo"];
 $vENES=$_REQUEST["enfasis"];
 $vFEIN=$_REQUEST["fechainicio"];
 $vFEFN=$_REQUEST["fechafin"];
 $vPRES=$_REQUEST["promedio"];
 
 if (empty($vCOES)||empty($vENES)||empty($vFEIN)||empty($vFEFN)||empty($vPRES)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee02estdio";
	$SQLstr =$SQLstr." SET EE29ENES = '".$vENES."', EE30FEIN = '".$vFEIN."', 
	                   EE31FEFN = '".$vFEFN."', EE32PRES = '".$vPRES."'";
	$SQLstr =$SQLstr." WHERE EE28COES ='".$vCOES."'";
    if (!$mysqli->query($SQLstr))
    {
        echo " Problemas al relizar la actualización: (" . $mysqli->errno . ") " . $mysqli->error;
    }
	else{
		echo'<strong><p class="alert-success">Proyecto actualizado</p></strong>'; 
	}
}
$mysqli->close();


?>
