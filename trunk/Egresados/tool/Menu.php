<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/menuStyle.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../js/scriptMenu.js"></script>
   <title>Menú del proyecto</title>
</head>
<body>
    <div id="sesion">
        <?php
                session_start();
                echo 'Bienvenido ' .$_SESSION['usuario'];
            ?>
    </div>
<div id='cssmenu'>
    
<ul>
   <li><a href='../mod/Estudiantes.php'><span>Estudiantes</span></a></li>
   <li><a href='../mod/Estudio.php'><span>Estudios</span></a></li>
   <li><a href='../mod/Carrera.php'><span>Carreras</span></a></li>
   <li><a href='../mod/Grado.php'><span>Grados</span></a></li>
   <li><a href='../mod/Institucion.php'><span>Instituciones</span></a></li>
   <li><a href='../mod/Trabajos.php'><span>Trabajos</span></a></li>
   <li><a href='../mod/Puesto.php'><span>Puestos</span></a></li>
   <li class='active has-sub'><a href=''><span>Salir</span></a>
      <ul>
          <li class='last'><a href='../Conexion/logout.php'><span>Cerrar sesión</span></a>
      </ul>
   </li>
</ul>
</div>

</body>
<html>