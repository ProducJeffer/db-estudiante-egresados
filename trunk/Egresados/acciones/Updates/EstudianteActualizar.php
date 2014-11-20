
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Actualizar estudiante</title>
  <link rel="stylesheet" type="text/css" href="../../css/ceGrid.css"/>
  <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
  <script type="text/javascript" src="../../js/jquery-1.2.6.min.js"></script>
</head>

<?php
date_default_timezone_set('America/Costa_Rica');
// ------------------------------------
// other php code
require '../../tool/config.php';
require '../../tool/ceSQL.php';
require '../../tool/ceGrid.php';

$dbase = new ceMySQLAdap($server,$usuario,$password,$database );

$dg= new ceDataGrid($dbase);

$id = $_GET['id'];
$SQLstr = "SELECT EE01COCN,EE05CEDU,EE02NOES,EE03PAPE,EE04SAPE FROM ee01estegr WHERE EE01COCN = '".$id."'";
$resultado = $mysqli->query($SQLstr);
while ($registros = $resultado->fetch_row())
{  
   $vCOCN=$registros[0];
   $vCEDU=$registros[1];
   $vNOES=$registros[2];
   $vPAPE=$registros[3];
   $vSAPE=$registros[4];
}
$mysqli->close();
?>


<a class="btn" href='../../mod/Estudiantes.php'>Listar Estudiantes</a>
<body>
    <div id="content-mt">
    <div class="curved" >
      <h2>Actualizar datos del estudiante egresado<h2>
    </div>
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="Registroact" method="post" id="form-pro" class="style" >         
                <table id = "tab01">
                <tr>
                      <td>Carnet</td>
                      <td><label>
                       <input type="text" name="Txt_COCN" id="carnet" value="<?php echo $vCOCN; ?>" readonly="readonly"  maxlength="15" /> 
                   </label></td>
               </tr>

               <tr>
                      <td>Cédula</td>
                      <td><label>
                      <input type="text" name="Txt_CEUS" id="cedula" value="<?php echo $vCEDU; ?>" readonly="readonly"  maxlength="15" /> 
                      </label></td>
               </tr>

               <tr> <td>Nombre</td>
                   <td><label>
                       <input type="text" name="Txt_NOES" id="nombre"  value="<?php echo $vNOES; ?>" maxlength="80" /> 
                   </label>
               </tr>

         <tr> <td>1° Apellido</td>
                   <td><label>
                       <input type="text" name="Txt_PAPE" id="apellido1"  value="<?php echo $vPAPE; ?>" maxlength="80" /> 
                   </label>
               </tr>
         <tr> <td>2° Apellido</td>
                   <td><label>
                       <input type="text" name="Txt_SAPE" id="apellido2"  value="<?php echo $vSAPE; ?>" maxlength="80" /> 
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
          carnet:$("#carnet").val(),
          cedula:$("#cedula").val(),
          nombre:$("#nombre").val(),
          apellido1:$("#apellido1").val(),
          apellido2:$("#apellido2").val(),
        };
        $.ajax({
          type:"POST",
            url:"EstudianteUpdate.php",
            data:form_data,
            success: function(responde){
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>