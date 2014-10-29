<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar proyecto</title>
  <link rel="stylesheet" type="text/css" href="mtb.css"/>
  <link rel="stylesheet" type="text/css" href="main.css"/>
  <link rel="stylesheet" type="text/css" href="ceGrid.css"/>
  <script type="text/javascript" src="../../../js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../../../css/index.css" />
</head>
<body>
<a class="btn" href="index.php">Lista de proyectos</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
        <form name="Reg_academico" method="POST"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>Nuevo Proyecto</td>
                        <td><label>
                           <input type="text" placeholder="Ingrese el nombre" name="Txt_GS01DOCA" id="datos" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <td></td>     
                   <td><label>
                       <input type="submit" name="Agregar_Btn" class="btn-m" id="Agregar_Btn" value="Agregar" />
                   </label></td>
               </tr>		
           </table> 
       </form>
   </div>
</div>
</body>

<script type="text/javascript">


    function validar() {
        //obteniendo el valor que se puso en el campo text del formulario
        val = document.getElementById("datos").value;
        //la condición
        if (val.length == 0 || /^\s+$/.test(val)) {
            return false;
        }
        return true;
    }
</script>
<!--script de validacion formulario-->
<script type="text/javascript">
    
    $(function(){
        $("#datos").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#datos").val(),
           

        };

        $.ajax({
          type:"POST",
            url:"Insert.php",
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
