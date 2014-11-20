<?php
require '../../tool/config.php';
 $vCOCN=$_REQUEST["carnet"];
 $vCEDU=$_REQUEST["cedula"];
 $vNOES=$_REQUEST["nombre"];
 $vPAPE=$_REQUEST["apellido1"];
 $vSAPE=$_REQUEST["apellido2"];
 $vTLFN=$_REQUEST["telefono"];
 $vEMAI=$_REQUEST["email"];
 
 if (empty($vCOCN)||empty($vCEDU)||empty($vNOES)||empty($vPAPE)||empty($vSAPE)||empty($vTLFN)||empty($vEMAI)) 
    {
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else{
	$SQLstr = "UPDATE ee01estegr";
	$SQLstr =$SQLstr." SET EE02NOES = '".$vNOES."', EE03PAPE = '".$vPAPE."', 
	                   EE04SAPE = '".$vSAPE."', EE08TLFN = '".$vTLFN."', EE09EMAI = '".$vEMAI."'";
	$SQLstr =$SQLstr." WHERE EE01COCN ='".$vCOCN."'";
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
