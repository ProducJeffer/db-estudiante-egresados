<?php 
//include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar grados</title>
  <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../../css/ceGrid.css"/>
  <script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
</head>

<?php

require '../tool/config.php';

$id=$_GET['id'];
$SQLstr = "SELECT EE36COGR,EE37NOGR FROM ee04grado WHERE EE36COGR = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOGR=$registros[0];
   $vNOGR=$registros[1];
}
$mysqli->close();
?>

<a class="btn" href='../../mod/Grado.php'>Listar Grados</a>
<body>
    <div id="content-mt">
		<div class="curved" >
			<h2>Actualizar grados<h2>
		</div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="Registroact" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Código</td>
                      <td><label>
                       <input type="text" name="Txt_COGR" id="codigo" value="<?php echo $vCOGR; ?>" readonly="readonly"  maxlength="8" /> 
                   </label></td>
               </tr>
                   <tr>
                      <td>Nombre</td>
                      <td><label>
                       <input type="text" name="Txt_NOGR" id="nombre" value="<?php echo $vNOGR; ?>" maxlength="30" /> 
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
            url:"GradoUpdate.php",
            data:form_data,
            success: function(responde){
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>