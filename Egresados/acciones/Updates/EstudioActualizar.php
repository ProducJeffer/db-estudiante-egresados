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

require '../tool/config.php';
$id=$_GET['id'];
$SQLstr = "SELECT EE28COES,EE29ENES,EE30FEIN,EE31FEFN,EE32PRES FROM ee02estdio WHERE EE28COES = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOES=$registros[0];
   $vENES=$registros[1];
   $vFEIN=$registros[2];
   $vFEFN=$registros[3];
   $vPRES=$registros[4];
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
                       <input type="text" name="Txt_COES" id="codigo" value="<?php echo $vCOES; ?>" readonly="readonly"  maxlength="8" /> 
                   </label></td>
               </tr>
                   <tr>
                      <td>Enfásis</td>
                      <td><label>
                       <input type="text" name="Txt_ENES" id="enfasis" value="<?php echo $vENES; ?>" maxlength="15" /> 
                   </label></td>
               </tr>
               <tr> <td>Inicio de estudios</td>
                   <td><label>
                       <input type="text" name="Txt_FEIN" id="fechainicio"  value="<?php echo $vFEIN; ?>" maxlength="80" /> 
                   </label>
               </tr>
			   <tr> <td>Fin de estudios</td>
                   <td><label>
                       <input type="text" name="Txt_FEFN" id="fechafin"  value="<?php echo $vFEFN; ?>" maxlength="80" /> 
                   </label>
               </tr>
			   <tr> <td>Promedio</td>
                   <td><label>
                       <input type="text" name="Txt_PRES" id="promedio"  value="<?php echo $vPRES; ?>" maxlength="80" /> 
                   </label>
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
          enfasis:$("#enfasis").val(),
          fechainicio:$("#fechainicio").val(),
		      fechafin:$("#fechafin").val(),
          promedio:$("#promedio").val(),
        };
        $.ajax({
          type:"POST",
            url:"Update.php",
            data:form_data,
            success: function(responde){
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>