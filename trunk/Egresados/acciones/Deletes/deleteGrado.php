<?php
require '../../Conexion/cred.php';
   $idGrade = $_GET["id"];
   $sqlQuery = "DELETE FROM ee04grado WHERE EE36COGR = '" .$idGrade. "'";
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
        " href="../../index.php">Regresar</a></div>';
    echo "El grado se ha eliminado correctamente";
} else {
    echo "Error al eliminar el grado: " .mysql_connect_eror();
}
mysql_close();