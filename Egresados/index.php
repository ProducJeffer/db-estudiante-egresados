<?php
session_start();
if(isset($_SESSION['usuario'])){
    header('Location: tool/Menu.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="css/logStyle.css" />
</head>
<body>

<div id="wrapper">

    <form name="formLogin" class="formLogin" action="Conexion/login.php" method="POST">
	
		<div class="cabecera">
		<h1>Identifícate</h1>
		<span>Proyecto estudiantes egresados</span>
		</div>
	
		<div class="contenido">
                    <input name="nombreUsuario" id="nombreUsuario" type="text" class="input" placeholder="Nombre de usuario" /><br/>
                    <div id="mensaje1"></div>
		<div class="iconoUsuario"></div>
                <input name="password" id="password" type="password" class="input" placeholder="Contraseña" /><br/>
                <div id="mensaje2"></div>
		<div class="iconoPass"></div>		
		</div>

		<div class="piePagina">
                    <input type="submit" name="submit" value="Iniciar" class="button"/>
		</div>
	
	</form>

</div>


</body>
</html>