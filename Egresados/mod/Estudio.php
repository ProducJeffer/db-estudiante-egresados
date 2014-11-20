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

$dg->setQuery("EE28COES,EE29ENES,EE30FEIN,EE31FEFN,EE32PRES,EE33COCN","ee02estdio");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addStudy.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE28COES', 'Código estudio');
$dg->setColumnHeader('EE29ENES', 'Enfásis');
$dg->setColumnHeader('EE30FEIN', 'Fecha Inicio');
$dg->setColumnHeader('EE31FEFN', 'Fecha final');
$dg->setColumnHeader('EE32PRES', 'Promedio final');
$dg->setColumnHeader('EE33COCN', 'Carnet');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='../acciones/Updates/EstudioActualizar.php?id=%EE28COES%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteEstudios.php?id=%EE28COES%'");
$dg->addItem(ceDataGrid::Go_Grade, "href='../Relations/RGrado.php?id=%EE28COES%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>