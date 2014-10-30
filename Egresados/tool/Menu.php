<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú de amigos</title>
        <link rel="stylesheet" type="text/css" href="../css/menuStyle.css"/>
    </head>
    <body>
        <div id="sesion">
            <?php
                session_start();
                echo 'Bienvenido ' .$_SESSION['usuario'];
            ?>
        </div>
        <div id="close">
            <div id="but"><a id="button" href="../Conexion/logout.php">Cerrar Sesión</a></div>
        </div>
        <nav id="menu">
            <ul>
                <li><a href="../mod/Estudiantes.php">Estudiantes</a></li>
                <li><a href="../mod/Carrera.php">Carreras</a></li>
                <li><a href="../mod/Estudio.php">Estudios</a></li>
                <li><a href="../mod/Grado.php">Grados</a></li>
                <li><a href="../mod/Institucion.php">Instituciones</a></li>
                <li><a href="../mod/Puesto.php">Puestos de trabajo</a></li>
            </ul>
        </nav>
    </body>
</html>
