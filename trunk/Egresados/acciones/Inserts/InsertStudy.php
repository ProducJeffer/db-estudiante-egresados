<?php
require '../../Conexion/cred.php';
	$codEstudio =  $_REQUEST['coes'];
        $enfasis = $_REQUEST['enfasis'];
        $inicio = $_REQUEST['fecIni'];
        $final = $_REQUEST['fecFin'];
        $promedio = $_REQUEST['prom'];
        $carnet = $_REQUEST['carnet'];
        $codicog = $_REQUEST['codigog'];
        $codicoc = $_REQUEST['codigoc'];
        

  // verificacion de estado empty
    if (empty($codEstudio)) 
    {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Estudio.php">Regresar</a></div>';
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE28COES FROM ee02estdio WHERE EE28COES = "' .$codEstudio. '"';
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
        " href="../../mod/Estudio.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">La carrera ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee02estdio VALUES('" .$codEstudio. "', '" .$enfasis. "', '" .$inicio. "' , '" .$final. "', " .$promedio. ", '" .$carnet. "', '" .$codicog. "', '" .$codicoc. "')";
    $query = mysql_query($sqlQuery);
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Estudio.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Estudio registrado</p></strong>';    
     
        }
        mysql_close();