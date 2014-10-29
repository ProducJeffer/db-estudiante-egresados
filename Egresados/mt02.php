<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar proyecto</title>
  <link rel="stylesheet" type="text/css" href="mtb.css"/>
  <link rel="stylesheet" type="text/css" href="main.css"/>
  <link rel="stylesheet" type="text/css" href="ceGrid.css"/>
    <script type="text/javascript" src="../../../js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../../../css/index.css" />
</head>

<?php

require '../../conexionBD/cecndb.php';
$id=$_GET['id'];
$SQLstr = "SELECT GS03COPR,GS03NOPR FROM gs03catpro WHERE GS03COPR = '".$id."'";
$EjecutaCSQL = $conectarBD->query($SQLstr);
while ($registros = $EjecutaCSQL->fetch_row())
{    
   $vCOPR=$registros[0];
   $vNOPR=$registros[1];
   
}
$conectarBD->close();
?>

<a class="btn" href='index.php'>Listar proyectos</a>
<body>
    <div id="content-mt">
        <div id="div01"  class="curved" >
         <div id="error"></div>
            <form name="Registroact" method="post" id="form-pro" class="style" >         
               
                <table id = "tab01">

                   <tr>
                      <td>Código</td>
                      <td><label>
                       <input type="text" name="Txt_GS03COPR" id="codigo" value="<?php echo $id; ?>" readonly="readonly"  maxlength="15" /> 
                   </label></td>
               </tr>
               <tr> <td>Nombre</td>
                   <td><label>
                       <input type="text" name="Txt_GS03NOPR" id="datos"  value="<?php echo $vNOPR;?>" maxlength="80" /> 
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
        $("#codigo").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           codigo:$("#codigo").val(),
           datos:$("#datos").val(),
           

        };

        $.ajax({
          type:"POST",
            url:"Update.php",
            data:form_data,
            success: function(responde){

               

                          
                     $("#datos").val("");
               
                    $("#error").html(responde);
            }

        });
    });
    });
</script>
</html>