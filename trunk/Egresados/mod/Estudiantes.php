<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<head>
<link href="../css/ceGrid.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
</head>


<button class ="btn" id= "atras" type="button" onclick="javascript: location.href='../Menu.php'">Regresar</button>


<body>
<div id="content">

<?php


$host = "localhost";
$usuario ="root";
$clave = "1234";

require '../tool/ceSQL.php';
require '../tool/ceGrid.php';

$dbase = new ceMySQLAdap($host,$usuario, $clave,"db_proyectoegresados");

$dg = new ceDataGrid($dbase);

$dg->setQuery("EE01COCN,EE05CEDU,EE02NOES,EE03PAPE,EE04SAPE","ee01estegr");

$dg->allowFilters();

$dg->showCreateButton("href='mt01.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE01COCN', 'Carnet');
$dg->setColumnHeader('EE05CEDU', 'Cédula');
$dg->setColumnHeader('EE02NOES', 'Nombre');
$dg->setColumnHeader('EE03PAPE', 'Primer apellido');
$dg->setColumnHeader('EE04SAPE', 'Segundo apellido');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='delete.php?id=%EE01COCN%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>