<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Estudios del estudiante</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
</head>
<body>
    <a class="btn" href="../mod/Estudio.php">Lista de Estudios</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
            <form name="Reg_academico" method="POST" action="../acciones/Inserts/InsertStudy.php"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>Estudios de los estudiantes</td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el código" name="coes" id="coes" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                                <textarea type="text" placeholder="Ingrese una breve descripcion del enfasís" name="enfasis" id="enfasis" maxlenght="300" ></textarea>
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="date" placeholder="Ingrese la fecha de inicio" name="fecIni" id="fecIni" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="date" tittle="Ingrese la fecha de salida" placeholder="Ingrese de egreso" name="fecFin" id="fecFin" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el promedio sacado" name="prom" id="prom" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el carnet del estudiante" name="carnet" id="carnet" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de grado logrado" name="codigog" id="codigog" value = ""  maxlength="50" /> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese el código de carrera" name="codigoc" id="codigoc" value = ""  maxlength="50" /> 
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
        val = document.getElementById("coes").value;
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
        $("#coes").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#coes").val();
        };

        $.ajax({
          type:"POST",
            url:"../tool/Menu.php",
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
