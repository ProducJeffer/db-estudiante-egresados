<?php
require '../../Conexion/cred.php';
   $idCareer = $_GET["id"];
   $sqlQuery = "DELETE FROM ee08usuario WHERE EE39CDUS = '" .$idCareer. "'";
   $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    if (!$conn) {
        echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Usuarios.php">Regresar</a></div>';
    die("La conexión fallo: " .mysqli_connect_error());
}
if (mysql_query($sqlQuery)) {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Usuarios.php">Regresar</a></div>';
    echo "El usuario se ha eliminado correctamente";
} else {
    echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../../mod/Usuarios.php">Regresar</a></div>';
    echo "Error al eliminar el usuario: " .mysql_connect_eror();
}
mysql_close();