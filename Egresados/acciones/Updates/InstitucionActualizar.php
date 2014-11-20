<?php 
//include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar datos del egresado</title>
  <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../../css/ceGrid.css"/>
  <script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
</head>

<?php

require '../tool/config.php';

$id=$_GET['id'];
$SQLstr = "SELECT EE17COIN,EE18NOIN,EE19NOSD,EE20NOCP,EE21DINS,EE22COTR,EE23COCR FROM ee05instcn WHERE EE17COIN = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOIN=$registros[0];
   $vNOIN=$registros[1];
   $vNOSD=$registros[2];
   $vNOCP=$registros[3];
   $vDINS=$registros[4];
   $vCOTR=$registros[5];
   $vCOCR=$registros[6];
}
$mysqli->close();
?>

<a class="btn" href='../../mod/Institucion.php'>Listar institucion</a>
<body>
    <div id="content-mt">
		<div class="curved" >
			<h2>Actualizar datos de la institucion<h2>
		</div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="RegistroInst" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Código institucion</td>
                      <td><label>
                       <input type="text" name="Txt_COIN" id="codin" value="<?php echo $vCOIN; ?>" readonly="readonly"  maxlength="15" /> 
                   </label></td>
               </tr>

               <tr>
                      <td>Nombre</td>
                      <td><label>
                      <input type="text" name="Txt_NOIN" id="nombre" value="<?php echo $vNOIN; ?>" readonly="readonly"  maxlength="15" /> 
                      </label></td>
               </tr>

               <tr> <td>Sede</td>
                   <td><label>
                       <input type="text" name="Txt_NOSD" id="sede"  value="<?php echo $vNOSD; ?>" maxlength="80" /> 
                   </label>
               </tr>

              <tr> <td>Campus</td>
                   <td><label>
                       <input type="text" name="Txt_NOCP" id="camous"  value="<?php echo $vNOCP; ?>" maxlength="80" /> 
                   </label>
               </tr>

			   <tr> <td>1° Direccion</td>
                   <td><label>
                       <input type="text" name="Txt_DINS " id="direccion"  value="<?php echo $vDINS; ?>" maxlength="80" /> 
                   </label>
               </tr>
			   <tr> <td>2° Código trabajo</td>
                   <td><label>
                       <input type="text" name="Txt_COTR" id="codtr"  value="<?php echo $vCOTR; ?>" maxlength="80" /> 
                   </label>
               </tr>
			   <tr> <td>Código Carrera</td>
                   <td><label>
                       <input type="text" name="Txt_COCR" id="codcr"  value="<?php echo $vCOCR; ?>" maxlength="80" /> 
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
        $("#carnet").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= { 
          codin:$("#codin").val(),
          nombre:$("#nombre").val(),
          sede:$("#sede").val(),
		      campus:$("#campus").val(),
		      direccion:$("#direccion").val(),
		      codtr:$("#codtr").val(),
          codcr:$("#codcr").val(),
        };
        $.ajax({
          type:"POST",
            url:"InstitucionUpdate.php",
            data:form_data,
            success: function(responde){
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>