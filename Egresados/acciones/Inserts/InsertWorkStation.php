<?php
require '../../Conexion/cred.php';
	$codPuesto =  $_REQUEST['codigoPuesto'];
        $puesto = $_REQUEST['puesto'];
        $departamento = $_REQUEST['departamento'];
        $tiempoLaboral = $_REQUEST['tiempoLaboral'];
        $codtrb = $_REQUEST['cotr'];
        
        

  // verificacion de estado empty
    if (empty($codPuesto)) 
    {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Puesto.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE12COPU FROM ee07puesto WHERE EE12COPU = "' .$codPuesto. '"';
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
        " href="../../mod/Puesto.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">El puesto ya se encuentra registrada</p></strong>';
     }else{
         
    $sqlQuery = "INSERT INTO ee07puesto VALUES('" .$codPuesto. "', '" .$puesto. "', '" .$departamento. "', '" .$tiempoLaboral. "', '" .$codtrb. "')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Puesto.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Puesto registrada</p></strong>';    
     
        }
        mysql_close();