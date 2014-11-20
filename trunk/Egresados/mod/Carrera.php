<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<head>
<link href="../css/ceGrid.css" rel="stylesheet" type="text/css">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>Lista de Carreras de los estudiantes</title>
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

$dg->setQuery("EE24COCR,EE25NOCR","ee03crrera");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addCareer.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE24COCR', 'Código carrera');
$dg->setColumnHeader('EE25NOCR', 'Nombre');



$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='../acciones/Updates/CarreraActualizar.php?id=%EE24COCR%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteCarrera.php?id=%EE24COCR%'");
$dg->addItem(ceDataGrid::Go_Study, "href='../Relations/RCareer.php?id=%EE24COCR%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
    <a href="../acciones/Updates/CarreraActualizar.php"></a>
</body>
</html>