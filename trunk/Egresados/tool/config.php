<?php
require '../Conexion/cred.php';
$mysqli = new mysqli($server,$usuario, $password, $database);

/*
 * Esta es la forma OO "oficial" de hacerlo,
 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
 */
if ($mysqli->connect_error>0) {
    die('Error de Conexi�n (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

?>