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

$dg->setQuery("EE01COCN,EE05CEDU,EE02NOES,EE03PAPE,EE04SAPE","ee01estegr");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addStudents.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE01COCN', 'Carnet');
$dg->setColumnHeader('EE05CEDU', 'Cédula');
$dg->setColumnHeader('EE02NOES', 'Nombre');
$dg->setColumnHeader('EE03PAPE', 'Primer apellido');
$dg->setColumnHeader('EE04SAPE', 'Segundo apellido');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/generalDeletes/deleteEstudiante.php?id=%EE01COCN%'");
$dg->addItem(ceDataGrid::Go_privileges, "href='#'");
$dg->addItem(ceDataGrid::Go_Job, "href='../Relations/RTrabajo.php?id=%EE01COCN%'");
$dg->addItem(ceDataGrid::Go_Study, "href='../Relations/REstudio.php?id=%EE01COCN%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>