<?php
require '../../Conexion/cred.php';
   $idCareer = $_GET["id"];
   $sqlQuery = "DELETE FROM ee03crrera WHERE EE24COCR = '" .$idCareer. "'";
   $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);
    if (!$conn) {
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
        " href="../../mod/Carrera.php">Regresar</a></div>';
    echo "La carrera se ha eliminado correctamente";
} else {
    echo "Error al eliminar la carrera: " .mysql_connect_eror();
}
mysql_close();