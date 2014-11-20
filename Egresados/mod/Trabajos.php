<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<head>
<link href="../css/ceGrid.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
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

$dg->setQuery("EE08COTR,EE10COPU,EE11COIN","ee06trabjo");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addJob.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE01COCN', 'Carnet');
$dg->setColumnHeader('EE02NOES', 'Estudiante');
$dg->setColumnHeader('EE18NOIN', 'Empresa');
$dg->setColumnHeader('EE13NOPU', 'Puesto');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='../acciones/Updates/TrabajoActualizar.php?id=%EE08COTR%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteTrabajo.php?id=%EE08COTR%'");
$dg->addItem(ceDataGrid::Go_WorkStation, "href='../mod/Puesto.php'");

$dg->showReset("Refrescar");
$dg->printTableJob();
?>
</div>
</body>
</html>