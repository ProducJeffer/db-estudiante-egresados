<?php
require '../../Conexion/cred.php';
	$nombUsuario =  $_REQUEST['nombUsuario'];
        $contrasena = md5($_REQUEST['contrasena']);
        
  // verificacion de estado empty
    if (empty($nombUsuario) && empty($contrasena)) 
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
    $sqlQuery = 'SELECT EE40NOUS FROM ee08usuario WHERE EE40NOUS = "' .$nombUsuario. '"';
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
         echo'<strong><p class="alert-error">El nombre de usuario "' .$nombUsuario. '" ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee08usuario(EE40NOUS, EE41PAUS) VALUES('" .$nombUsuario. "', '" .$contrasena. "')";
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
     echo'<strong><p class="alert-success">Usuario registrada</p></strong>';    
     
        }
        mysql_close();