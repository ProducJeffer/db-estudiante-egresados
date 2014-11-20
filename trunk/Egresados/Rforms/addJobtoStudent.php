<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar trabajos de estudiantes</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
</head>
<body>
    <a class="btn" href="../mod/Trabajos.php">Lista de trabajos general</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
            <form name="Reg_academico" method="POST" action="../acciones/relationInsert/insertRJob.php"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>trabajos de los estudiantes</td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el carnet del estudiante" name="carnetEstudiante" id="carnetEstudiante" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese un código para el puesto" name="codigoPuesto" id="codigoPuesto" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el puesto de trabajo" name="puesto" id="puesto" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el departamento" name="departamento" id="departamento" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el tiempo laboral" name="tiempoLaboral" id="tiempoLaboral" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el código para la institución" name="codigoIns" id="codigoIns" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese nombre de la institución" name="nombreIns" id="nombreIns" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese la sede" name="sede" id="sede" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                                <textarea type="text" placeholder="Ingrese brevemente la dirección de la institución" maxlength="300" name="direccion" id="direccion"></textarea>
                        </label></td>
                   </tr>
                   <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el código de trabajo" name="codigoTrabajo" id="codigoTrabajo" value = ""  maxlength="50" required/> 
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
        val = document.getElementById("codigoTrabajo").value;
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
        $("#codigoTrabajo").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#codigoTrabajo").val();
        };

        $.ajax({
          type:"POST",
            url:"../tool/Menu.php",
            data:form_data,
            success: function(responde){

               

                          
                     $("#codigoTrabajo").val("");
               
                    $("#error").html(responde);
            }

        });
    });
    });
</script>

</html>
