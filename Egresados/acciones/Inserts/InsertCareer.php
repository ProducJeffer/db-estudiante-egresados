<?php
require '../../Conexion/cred.php';
	$codCarrera =  $_REQUEST['codigo'];
        $nombCarrera = $_REQUEST['nombreCarrera'];
        $codInstitucion = $_REQUEST['codigoInstitución'];
        $codEstudio = $_REQUEST['codigoEstudio'];
        

  // verificacion de estado empty
    if (empty($codCarrera)) 
    {
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE24COCR FROM ee03crrera WHERE EE24COCR = "' .$codCarrera. '"';
    $query = mysql_query($sqlQuery);
     if(mysql_num_rows($query) > 0){
         echo'<strong><p class="alert-error">La carrera ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee03crrera VALUES('" .$codCarrera. "', '" .$nombCarrera. "', '" .$codInstitucion. "' , '" .$codEstudio. "')";
    $query = mysql_query($sqlQuery);
    
     echo'<strong><p class="alert-success">Carrera registrada</p></strong>';    
     
        }
        mysql_close();