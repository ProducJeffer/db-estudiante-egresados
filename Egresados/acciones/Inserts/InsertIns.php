<?php
require '../../Conexion/cred.php';
	$codIns =  $_REQUEST['codigoIns'];
        $nombIns = $_REQUEST['nombreIns'];
        $sede = $_REQUEST['sede'];
        $campus = $_REQUEST['campus'];
        $direccion = $_REQUEST['direccion'];
        $codtr = $_REQUEST['cotr'];
        $codc = $_REQUEST['codc'];
        

  // verificacion de estado empty
    if (empty($codIns)) 
    {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Institucion.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE17COIN FROM ee05instcn WHERE EE17COIN = "' .$codIns. '"';
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
        " href="../../mod/Institucion.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">La institución ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee05instcn VALUES('" .$codIns. "', '" .$nombIns. "', '" .$sede. "' , '" .$campus. "', '" .$direccion. "', '" .$codtr. "', '".$codc ."')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Institucion.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Institución registrada</p></strong>';    
     
        }
        mysql_close();