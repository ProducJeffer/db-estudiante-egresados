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

$dg->setQuery("EE36COGR,EE37NOGR","ee04grado");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addGrade.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE36COGR', 'Código grado');
$dg->setColumnHeader('EE37NOGR', 'Grado');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteGrado.php?id=%EE36COGR%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>