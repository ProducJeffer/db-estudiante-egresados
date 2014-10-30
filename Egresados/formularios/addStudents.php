<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Estudiante egresado</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
</head>
<body>
    <a class="btn" href="../mod/Estudiantes.php">Lista de Estudiantes</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
            <form name="Reg_academico" method="POST" action="../acciones/InsertStudent.php"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>Estudiante egresado</td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el carnet" name="Carnet" id="Carnet" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese la cédula" name="Cedula" id="Cedula" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el nombre" name="nombre" id="nombre" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el primer apellido" name="papellido" id="papellido" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el segundo apellido" name="sapellido" id="sapellido" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de estudio" name="coes" id="coes" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de trabajo" name="cotr" id="cotr" value = ""  maxlength="50" /> 
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
        val = document.getElementById("Carnet").value;
        //la condición
        if (val.length === 0 || /^\s+$/.test(val)) {
            return false;
        }
        return true;
    }
</script>
<!--script de validacion formulario-->
<script type="text/javascript">
    
    $(function(){
        $("#Carnet").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#Carnet").val();
        };

        $.ajax({
          type:"POST",
            url:"Menu.php",
            data:form_data,
            success: function(responde){

               

                          
                     $("#Carnet").val("");
               
                    $("#error").html(responde);
            }

        });
    });
    });
</script>

</html>
