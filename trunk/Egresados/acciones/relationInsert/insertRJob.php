<?php
require '../../Conexion/cred.php';
	$carnet =  $_REQUEST['carnetEstudiante'];
        
        $codTrabajo =  $_REQUEST['codigoTrabajo'];
        
        $codIns =  $_REQUEST['codigoIns'];
        $nombIns = $_REQUEST['nombreIns'];
        $sede = $_REQUEST['sede'];
        $direccion = $_REQUEST['direccion'];
        
        $codPuesto =  $_REQUEST['codigoPuesto'];
        $puesto = $_REQUEST['puesto'];
        $departamento = $_REQUEST['departamento'];
        $tiempoLaboral = $_REQUEST['tiempoLaboral'];
        
        if (empty($carnet))
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
        " href="../../index.php">Regresar</a></div>';
         echo'<strong><p class="alert-error">La institución ya se encuentra registrada</p></strong>';
     }else{
         $institucion = 'INSERT INTO ee05instcn(EE17COIN,EE18NOIN,EE19NOSD,EE21DINS,EE22COTR) VALUES("' .$codIns. '", "' .$nombIns. '", "' .$sede. '", "' .$direccion. '", "' .$codTrabajo. '")';
         $resultadoInstitucion = mysql_query($institucion);
         
         $cargo = 'INSERT INTO ee07puesto(EE12COPU,EE13NOPU,EE14NODE,EE15TIOP,EE16COTR) VALUES("' .$codPuesto. '", "' .$puesto. '", "' .$departamento. '", "' .$tiempoLaboral. '", "' .$codTrabajo. '")';
         $resultadoPuesto = mysql_query($cargo);
         
         $trabajo = 'INSERT INTO ee06trabjo(EE08COTR,EE10COPU,EE11COIN,EE42COCN) VALUES("' .$codTrabajo. '", "' .$codPuesto. '", "' .$codIns. '", "' .$carnet. '")';
         $resultadoTrabajo = mysql_query($trabajo);
         
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../index.php">Regresar</a></div>';
     echo'<strong><p class="alert-success">Registro exitoso</p></strong>';    
     
        }
        mysql_close();