<?php
require '../tool/config.php';
 $vCOGR=$_REQUEST["codigo"];
 $vNOGR=$_REQUEST["nombre"];
 
 if (empty($vCOGR)||empty($vNOGR)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee04grado";
	$SQLstr =$SQLstr." SET EE37NOGR = '".$vNOGR."'";
	$SQLstr =$SQLstr." WHERE EE36COGR ='".$vCOGR."'";
    if (!$mysqli->query($SQLstr))
    {
        echo " Problemas al relizar la actualización: (" . $mysqli->error . ") " . $mysqli->error;
    }
	else{
		echo'<strong><p class="alert-success">Proyecto actualizado</p></strong>'; 
	}
}
$mysqli->close();


?>
