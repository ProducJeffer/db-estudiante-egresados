<?php
require '../../conexionBD/cecndb.php';
 $vCOPR=$_REQUEST["codigo"];
 $vNOPR=$_REQUEST["datos"];

 
 
 if (empty($vNOPR)) 
    {
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else if(!preg_match('/^[A-Záéóóúàèìòùäëïöüñ\s][a-záéóóúàèìòùäëïöüñ\s]+$/i', $vNOPR)) 
{
    echo'<strong><p class="alert-error">Formato no válido</p></strong>';
}
else{
	$SQLstr = "UPDATE gs03catpro";
 $SQLstr =$SQLstr." SET GS03NOPR = '".$vNOPR."'";
 $SQLstr =$SQLstr." Where GS03COPR ='".$vCOPR."'";
     $sql=$conectarBD->query($SQLstr);
      echo'<strong><p class="alert-success">Proyecto actualizado</p></strong>'; 
}
$conectarBD->close();


?>
