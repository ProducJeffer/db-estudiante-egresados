<?php
require '../../Conexion/cred.php';
	$codGrado =  $_REQUEST['codigoGrado'];
        $grado = $_REQUEST['grado'];
        $ce = $_REQUEST['coes'];

  // verificacion de estado empty
    if (empty($codGrado)) 
    {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Grado.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE36COGR FROM ee04grado WHERE EE36COGR = "' .$codGrado. '"';
    $query = mysql_query($sqlQuery);
     if(mysql_num_rows($query) > 0){
         echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href../../mod/Grado.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">El grado ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee04grado VALUES('" .$codGrado. "', '" .$grado. "', '" .$ce. "')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Grado.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Grado registrada</p></strong>';    
     
        }
        mysql_close();
        