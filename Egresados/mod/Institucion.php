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

$dg->setQuery("EE17COIN,EE18NOIN,EE19NOSD,EE20NOCP,EE21DINS","ee05instcn");

$dg->allowFilters();

$dg->showCreateButton("href='../formularios/addInstitution.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE17COIN', 'Código institución');
$dg->setColumnHeader('EE18NOIN', 'Nombre');
$dg->setColumnHeader('EE19NOSD', 'Sede');
$dg->setColumnHeader('EE20NOCP', 'Campus');
$dg->setColumnHeader('EE21DINS', 'Dirección');


$dg->addStandardControl(ceDataGrid::STDCTRL_EDIT, "href='mt02.php?id=%EE01COCN%'");
$dg->addStandardControl(ceDataGrid::STDCTRL_DELETE, "href='../acciones/Deletes/deleteInstitucion.php?id=%EE17COIN%'");
$dg->addItem(ceDataGrid::Go_Job, "href='../Relations/RTrabajotoInst.php?id=%EE17COIN%'");
$dg->addItem(ceDataGrid::Go_Career, "href='../Relations/RPuesto.php?id=%EE17COIN%'");

$dg->showReset("Refrescar");
$dg->printTable();
?>
</div>
</body>
</html>