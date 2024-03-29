<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<head>
<link href="../css/ceGrid.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>Lista de Usuarios Registrados</title>
</head>


<button class ="btn" id= "atras" type="button" onclick="javascript: location.href='../tool/Menu.php'">Regresar</button>


<body>
<div id="content">

<?php

require '../Conexion/cred.php';

require '../tool/ceSQL.php';
require '../tool/ceGrid.php';

$dbase = new ceMySQLAdap($server, $usuario, $password,$database);

$dg = new ceDataGrid($dbase); 

$dg->setQuery("EE39CDUS,EE40NOUS", "ee08usuario");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addUser.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE39CDUS', 'Usuario');
$dg->setColumnHeader('EE40NOUS', 'Nombre de usuario');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteUsuario.php?id=%EE39CDUS%'");
$dg->addItem(ceDataGrid::Go_privileges, "href='#'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>