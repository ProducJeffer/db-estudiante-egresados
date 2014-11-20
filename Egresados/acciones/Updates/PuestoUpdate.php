<?php
require '../tool/config.php';
 $vCOPU=$_REQUEST["codpu"];
 $vNOPU=$_REQUEST["puesto"];
 $vNODE=$_REQUEST["departamento"];
 $vTIOP=$_REQUEST["tiempo"];

 if (empty($vCOTR)||empty($vCOPU)||empty($vCOIN)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee07puesto";
	$SQLstr =$SQLstr." SET EE13NOPU = '".$vNOPU."',EE14NODE = '".$vNODE."',EE15TIOP = '".$vTIOP."' ";
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
