<?php
require '../../Conexion/cred.php';
	$codTrabajo =  $_REQUEST['codigoTrabajo'];
        $copu = $_REQUEST['copu'];
        $coin = $_REQUEST['coin'];
        

  // verificacion de estado empty
    if (empty($codTrabajo)) 
    {
    
    echo'<strong><p class="alert-error">Campo vacio</p></strong>';
    }
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    $sqlQuery = 'SELECT EE08COTR FROM ee06trabjo WHERE EE08COTR = "' .$codTrabajo. '"';
    $query = mysql_query($sqlQuery);
     if(mysql_num_rows($query) > 0){
         echo'<strong><p class="alert-error">El trabajo ya se encuentra registrada</p></strong>';
     }else{
    $sqlQuery = "INSERT INTO ee06trabjo VALUES('" .$codTrabajo. "', '" .$copu. "', '" .$coin. "')";
    $query = mysql_query($sqlQuery);
    
     echo'<strong><p class="alert-success">Trabajo registrado</p></strong>';    
     
        }
        mysql_close();