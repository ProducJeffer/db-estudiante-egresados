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
$SQLstr = "SELECT EE12COPU,EE13NOPU,EE14NODE,EE15TIOP FROM ee07puesto WHERE EE12COPU = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOPU=$registros[0];
   $vNOPU=$registros[1];
   $vNODE=$registros[2];
   $vTIOP=$registros[3];
}
$mysqli->close();
?>

<a class="btn" href='index.php'>Listar puestos</a>
<body>
    <div id="content-mt">
		<div class="curved" >
			<h2>Actualizar puestos de trabajo<h2>
		</div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="RegistroTrab" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Código puesto</td>
                      <td><label>
                       <input type="text" name="Txt_COPU" id="codpu" value="<?php echo $vCOPU; ?>" readonly="readonly"  maxlength="8" /> 
                   </label></td>
               </tr>
                   <tr>
                      <td>Puesto</td>
                      <td><label>
                       <input type="text" name="Txt_NOPU" id="puesto" value="<?php echo $vNOPU; ?>" maxlength="30" /> 
                   </label></td>
               </tr>
                <tr>
                      <td>Departamento</td>
                      <td><label>
                       <input type="text" name="Txt_NODE" id="departamento" value="<?php echo $vNODE; ?>" maxlength="30" /> 
                   </label></td>
               </tr>

               <tr>
                      <td>Tiempo laborando</td>
                      <td><label>
                       <input type="text" name="Txt_TIOP" id="tiempo" value="<?php echo $vTIOP; ?>" maxlength="30" /> 
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
        $("#codpu").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= { 
          codpu:$("#codpu").val(),
          puesto:$("#puesto").val(),
          departamento:$("#departamento").val(),
          tiempo:$("#tiempo").val(),
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