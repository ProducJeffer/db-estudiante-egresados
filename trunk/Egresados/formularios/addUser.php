<?php 
include  "./../protected.php"; /*Valida el inico de sesion*/
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Nuevo Usuario</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/ceGrid.css"/>
</head>
<body>
    <a class="btn" href="../mod/Usuarios.php">Lista de usuarios</a>
    <div id="content-mt">
        <div id="div01"  class="curved" >
            <form name="Reg_academico" method="POST" action="../acciones/Inserts/InsertUser.php"  id="form-pro" onsubmit="return validar()" class="style" >
<table id="tab01">
	<tr align="center">
     <div id="error"></div>
                    <tr>
                        <td>Usuario</td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="text" placeholder="Ingrese el nombre de usuario" name="nombUsuario" id="nombUsuario" value = ""  maxlength="50" required/> 
                       </label></td>
                   </tr>
                   <tr>
                        <td><label>
                           <input type="text" placeholder="Ingrese la contraseña" name="contrasena" id="contrasena" value = ""  maxlength="50" required/> 
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
        val = document.getElementById("codigo").value;
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
        $("#codigo").focus();
    $("#form-pro").submit(function(e){
        e.preventDefault();
    var form_data= {    
           datos:$("#codigo").val();
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
