<?php
require '../Conexion/cred.php';

$user = filter_input(INPUT_POST, 'nombreUsuario');
$pass = filter_input(INPUT_POST, 'password');

if(isset($user)  && isset($pass)){
    $conn = mysql_connect($server, $usuario, $password);
    mysql_select_db($database, $conn);

    $sqlQuery = 'SELECT EE40NOUS, EE41PAUS FROM ee08usuario WHERE EE40NOUS = "' .$user. '" AND EE41PAUS = "' .$pass. '" LIMIT 1';
    $query = mysql_query($sqlQuery);

    if(mysql_num_rows($query) > 0){
        session_start();
        $_SESSION['usuario'] = $user;
        $_SESSION['pass'] = $pass;
        header('Location: ../Menu.php');
    }
    else{
        echo '<div style="float: left;"><a style="font-size: 200%;
            text-decoration: none;
            padding: 15px;
            background-color: lightblue;
            color: white;
            font-family: Helvetica, sans-serif;
            border-radius: 5px;
            border: 1px solid black;
        " href="../index.php">Regresar</a></div>';
        echo '<center><div style="font-size: 200%; font-family: Helvetica, sans-serif;">
        Usuario o password equivocados <br/></div></center>';
    }
}