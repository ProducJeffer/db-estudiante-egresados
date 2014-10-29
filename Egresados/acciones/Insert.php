<?php
 require '../../conexionBD/cecndb.php';
	$ncatpro=$_REQUEST["datos"];
   
  

  // verificacion de estado empty
    if (empty($ncatpro)) 
    {
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
else if(!preg_match('/^[A-Záéóóúàèìòùäëïöüñ\s][a-záéóóúàèìòùäëïöüñ\s]+$/i', $ncatpro)) 
{
    echo'<strong><p class="alert-error">Formato no válido</p></strong>';
}

else{
   
    $SQLstr ="INSERT INTO ee01estegr VALUES('".$ncatpro."')";
    $sql=$conectarBD->query($SQLstr);

     echo'<strong><p class="alert-success">Proyecto registrado</p></strong>';    
     
        }
    $conectarBD->close();
?>