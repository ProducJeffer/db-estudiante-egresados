<?php
require '../tool/config.php';
 $vCOTR=$_REQUEST["trabajo"];
 $vCOPU=$_REQUEST["puesto"];
 $vCOIN=$_REQUEST["institucion"];

 if (empty($vCOTR)||empty($vCOPU)||empty($vCOIN)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee06trabjo";
	$SQLstr =$SQLstr." SET EE10COPU = '".$vCOPU."',EE11COIN = '".$vCOIN."' ";
	$SQLstr =$SQLstr." WHERE EE08COTR ='".$vCOTR."'";
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
