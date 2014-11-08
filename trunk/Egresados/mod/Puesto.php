<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<head>
<link href="../css/ceGrid.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>Lista de Puestos</title>
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

$dg->setQuery("EE12COPU,EE13NOPU,EE14NODE,EE15TIOP","ee07puesto");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addWorkStation.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE12COPU', 'Código puesto');
$dg->setColumnHeader('EE13NOPU', 'Puesto');
$dg->setColumnHeader('EE14NODE', 'Departamento');
$dg->setColumnHeader('EE15TIOP', 'Tiempo trabajando');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deletePuesto.php?id=%EE12COPU%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>