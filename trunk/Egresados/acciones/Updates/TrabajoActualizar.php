<?php 
//include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar trabajo</title>
  <link rel="stylesheet" type="text/css" href="../css/mtb.css"/>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
  <script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
</head>

<?php

require '../tool/config.php';
$id=$_GET['id'];
$SQLstr = "SELECT EE08COTR,EE10COPU,EE11COIN FROM ee06trabjo WHERE EE08COTR = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOTR=$registros[0];
   $vCOPU=$registros[1];
   $vCOIN=$registros[2];
}
$mysqli->close();
?>

<a class="btn" href='index.php'>Listar trabajos</a>
<body>
    <div id="content-mt">
		<div class="curved" >
			<h2>Actualizar trabajos<h2>
		</div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="RegistroTrab" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Código trabajo</td>
                      <td><label>
                       <input type="text" name="Txt_COTR" id="trabajo" value="<?php echo $vCOTR; ?>" readonly="readonly"  maxlength="8" /> 
                   </label></td>
               </tr>
                   <tr>
                      <td>Código puesto</td>
                      <td><label>
                       <input type="text" name="Txt_COPU" id="puesto" value="<?php echo $vCOPU; ?>" maxlength="30" /> 
                   </label></td>
               </tr>
                <tr>
                      <td>Código institución</td>
                      <td><label>
                       <input type="text" name="Txt_COIN" id="institucion" value="<?php echo $vCOIN; ?>" maxlength="30" /> 
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
          trabajo:$("#trabajo").val(),
          puesto:$("#puesto").val(),
          institucion:$("#institucion").val(),
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