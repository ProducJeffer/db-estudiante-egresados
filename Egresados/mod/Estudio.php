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

$host = "localhost";
$usuario ="root";
$clave = "1234";

require '../tool/ceSQL.php';
require '../tool/ceGrid.php';

$dbase = new ceMySQLAdap($host,$usuario, $clave,"db_proyectoegresados");

$dg = new ceDataGrid($dbase); 

$dg->setQuery("EE28COES,EE29ENES,EE30FEIN,EE31FEFN,EE32PRES,EE33COCN","ee02estdio");

$dg->allowFilters();

$dg->showCreateButton("href='mt01.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE28COES', 'Código estudio');
$dg->setColumnHeader('EE29ENES', 'Enfásis');
$dg->setColumnHeader('EE30FEIN', 'Fecha Inicio');
$dg->setColumnHeader('EE31FEFN', 'Fecha final');
$dg->setColumnHeader('EE32PRES', 'Promedio final');
$dg->setColumnHeader('EE33COCN', 'Carnet');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='delete.php?id=%EE01COCN%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>