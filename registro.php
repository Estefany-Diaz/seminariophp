<?php
    require_once "clases/Conexion.php";
    $c = new Conectar();
    $conexion = $c->conexion();
    $sql = "select * from usuarios where email='mugui'";
    $result = mysqli_query($conexion, $sql);
    $validar=0;
    if (mysqli_num_rows($result) > 0 ){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel" style="background-color:teal;">
                    <div class="panel-heading" style="color:#fff; font-weight: bold; text-align:center">
                        Registrar Administrador
                    </div>
                    <div class="panel-body">
                        <form id="formRegistro" action="">
                            <label style="color:#fff;">Nombre</label>
                            <input type="text" class="form-control input-sm" name="nombre" id="nombre">
                            <label style="color:#fff;">Apellido</label>
                            <input type="text" class="form-control input-sm" name="apellido" id="apellido">
                            <label style="color:#fff;">Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label style="color:#fff;">Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <p></p>
                            <span class="btn btn-primary btn-sm" id="registro">Registrar</span>
                            <a  href="index.php" class="btn btn-default btn-sm">Regresar a Login</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#registro').click(function(){
            vacio = validarFormVacio('formRegistro');
            if ( vacio > 0 ) {
                alert('Debes llenar todos los campos');
                return false;
            }
            datos=$('#formRegistro').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/registroLogin/registrarUsuario.php",
                success:function(r){
                    if ( r == 1 ) {
                        alert("Agregado con exito");
                    } else {
                        alert("Fallo al agregar");
                    }
                }
            });
        });
    });
</script>