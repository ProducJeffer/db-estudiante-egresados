<?php
require '../../Conexion/cred.php';
	$codCarrera =  $_REQUEST['codigo'];
        $nombCarrera = $_REQUEST['nombreCarrera'];
        $codInstitucion = $_REQUEST['codigoInstitución'];
        $codEstudio = $_REQUEST['codigoEstudio'];
        

  // verificacion de estado empty
    if (empty($codCarrera)) 
    {
        echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../index.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE24COCR FROM ee03crrera WHERE EE24COCR = "' .$codCarrera. '"';
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
        " href="../../index.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">La carrera ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee03crrera VALUES('" .$codCarrera. "', '" .$nombCarrera. "', '" .$codInstitucion. "' , '" .$codEstudio. "')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../index.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Carrera registrada</p></strong>';    
     
        }
        mysql_close();