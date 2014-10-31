<?php
require '../../Conexion/cred.php';
	$codGrado =  $_REQUEST['codigoGrado'];
        $grado = $_REQUEST['grado'];
        $ce = $_REQUEST['coes'];

  // verificacion de estado empty
    if (empty($codGrado)) 
    {
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE36COGR FROM ee04grado WHERE EE36COGR = "' .$codGrado. '"';
    $query = mysql_query($sqlQuery);
     if(mysql_num_rows($query) > 0){
         echo'<strong><p class="alert-error">El grado ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee04grado VALUES('" .$codGrado. "', '" .$grado. "', '" .$ce. "')";
    $query = mysql_query($sqlQuery);
    
     echo'<strong><p class="alert-success">Grado registrada</p></strong>';    
     
        }
        mysql_close();
        