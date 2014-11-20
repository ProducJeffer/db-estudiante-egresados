<?php
require '../tool/config.php';
 $vCOIN=$_REQUEST["codin"];
 $vNOIN=$_REQUEST["nombre"];
 $vNOSD=$_REQUEST["sede"];
 $vNOCP=$_REQUEST["campus"];
 $vDINS=$_REQUEST["direccion"];
 $vCOTR=$_REQUEST["codtr"];
 $vCOCR=$_REQUEST["codcr"];
 
 if (empty($vCOIN)||empty($vNOIN)||empty($vNOSD)||empty($vNOCP)||empty($vDINS)||empty($vCOTR)||empty($vCOCR)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee05instcn";
	$SQLstr =$SQLstr." SET EE18NOIN = '".$vNOIN."', EE19NOSD = '".$vNOSD."', 
	                   EE20NOCP = '".$vNOCP."', EE21DINS = '".$vDINS."', EE22COTR = '".$vCOTR."'";
	$SQLstr =$SQLstr." WHERE EE17COIN ='".$vCOIN."'";
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
