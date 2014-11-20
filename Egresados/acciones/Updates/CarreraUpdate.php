<?php
require '../tool/config.php';
 $vCOCR=$_REQUEST["codigo"];
 $vNOCR=$_REQUEST["nombre"];
 
 if (empty($vCOCR)||empty($vNOCR)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee03crrera";
	$SQLstr =$SQLstr." SET EE25NOCR = '".$vNOCR."'";
	$SQLstr =$SQLstr." WHERE EE24COCR ='".$vCOCR."'";
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
