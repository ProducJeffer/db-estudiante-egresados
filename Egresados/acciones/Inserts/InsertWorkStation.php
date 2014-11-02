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
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE12COPU FROM ee07puesto WHERE EE12COPU = "' .$codPuesto. '"';
    $query = mysql_query($sqlQuery);
     if(mysql_num_rows($query) > 0){
         echo'<strong><p class="alert-error">El puesto ya se encuentra registrada</p></strong>';
     }else{
         
    $sqlQuery = "INSERT INTO ee07puesto VALUES('" .$codPuesto. "', '" .$puesto. "', '" .$departamento. "', '" .$tiempoLaboral. "', '" .$codtrb. "')";
    $query = mysql_query($sqlQuery);
    
     echo'<strong><p class="alert-success">Puesto registrada</p></strong>';    
     
        }
        mysql_close();