<?php 
//include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar estudios</title>
  <link rel="stylesheet" type="text/css" href="../css/mtb.css"/>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
  <script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
</head>

<?php
date_default_timezone_set('America/Costa_Rica');
require '../../Conexion/cred.php';
$id=$_GET['id'];
$SQLstr = "SELECT EE24COCR,EE25NOCR FROM ee03crrera WHERE EE24COCR = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOCR=$registros[0];
   $vNOCR=$registros[1];
}
$mysqli->close();
?>

<a class="btn" href='index.php'>Listar Estudios</a>
<body>
    <div id="content-mt">
		<div class="curved" >
			<h2>Actualizar Estudios<h2>
		</div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="Registroact" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Código</td>
                      <td><label>
                       <input type="text" name="Txt_COCR" id="codigo" value="<?php echo $vCOCR; ?>" readonly="readonly"  maxlength="8" /> 
                   </label></td>
               </tr>
                   <tr>
                      <td>Nombre</td>
                      <td><label>
                       <input type="text" name="Txt_NOCR" id="nombre" value="<?php echo $vNOCR; ?>" maxlength="30" /> 
                   </label></td>
               </tr>
               <tr>
                   <td></td>
                   <td><label>
                       <input type="submit" name="Agregar_Btn" class="btn-m"  id="Agregar_Btn" value="Cambiar" />
                   </label></td>
               </tr>
               
           </table> 
       </form>
   </div>
</div>
</body>
<script type="text/javascript">
   $(function(){
        $("#nombre").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= { 
          codigo:$("#codigo").val(),
          nombre:$("#nombre").val(),
        };
        $.ajax({
          type:"POST",
            url:"CarreraUpdate.php",
            data:form_data,
            success: function(responde){
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>