<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar las instituciones de estudiantes</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
</head>
<body>
    <a class="btn" href="../mod/Institucion.php">Lista de instituciones</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
            <form name="Reg_academico" method="POST" action="../acciones/Inserts/InsertIns.php"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>Grados de los estudiantes</td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el código" name="codigoIns" id="codigoIns" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese nombre" name="nombreIns" id="nombreIns" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese la sede" name="sede" id="sede" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el campus" name="campus" id="campus" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                                <textarea type="text" placeholder="Ingrese brevemente la dirección de la institución" maxlength="300" name="direccion" id="direccion"></textarea>
                        </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de trabajo" name="cotr" id="cotr" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de carrera" name="codc" id="codc" value = ""  maxlength="50" /> 
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
        val = document.getElementById("codigoIns").value;
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
        $("#codigoIns").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#codigoIns").val();
        };

        $.ajax({
          type:"POST",
            url:"../tool/Menu.php",
            data:form_data,
            success: function(responde){

               

                          
                     $("#codigoIns").val("");
               
                    $("#error").html(responde);
            }

        });
    });
    });
</script>

</html>

