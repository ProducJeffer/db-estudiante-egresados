<?php
require '../../Conexion/cred.php';
	$carnet =  $_REQUEST['Carnet'];
        $cedula = $_REQUEST['Cedula'];
        $nombre = $_REQUEST['nombre'];
        $apellido1 = $_REQUEST['papellido'];
        $apellido2 = $_REQUEST['sapellido'];
        $coes = $_REQUEST['coes'];
        $cotr = $_REQUEST['cotr'];
        

  // verificacion de estado empty
    if (empty($carnet) && empty($cedula)) 
    {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Estudiantes.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE01COCN FROM ee01estegr WHERE EE01COCN = "' .$carnet. '"';
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
        " href="../../mod/Estudiantes.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">El estudiante ya se encuentra registrado</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee01estegr VALUES('" .$carnet. "', '" .$nombre. "', '" .$apellido1. "', '" .$apellido2. "', " .$cedula. ", '" .$coes. "', '" .$cotr. "')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Estudiantes.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Estudiante registrado</p></strong>';    
     
        }
        mysql_close();