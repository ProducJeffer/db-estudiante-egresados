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
$idPuestoEstudiante = $_GET['id'];
require '../Conexion/cred.php';

require '../tool/ceSQL.php';
require '../tool/ceGrid.php';

$dbase = new ceMySQLAdap($server, $usuario, $password,$database);

$dg = new ceDataGrid($dbase); 

$dg->setQuery("EE08COTR,EE10COPU,EE11COIN","ee06trabjo");


$dg->showCreateButton("href='../formularios/addJob.php'", ceDataGrid::TYPE_ONCLICK, 'Agregar');
$dg->setResultsPerPage(10);

$dg->setColumnHeader('EE01COCN', 'Carnet');
$dg->setColumnHeader('EE02NOES', 'Estudiante');
$dg->setColumnHeader('EE25NOCR', 'Carrera');
$dg->setColumnHeader('EE18NOIN', 'Universidad');

$dg->showReset("Refrescar");
$dg->printTableII(ceDataGrid::Puesto, $idPuestoEstudiante);
?>
</div>
</body>
</html>