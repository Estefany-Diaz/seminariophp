<?php
    require_once "clases/Conexion.php";
    $c = new Conectar();
    $conexion = $c->conexion();
    $sql = "select * from usuarios where email='mugui'";
    $result = mysqli_query($conexion, $sql);
    $validar=0;
    if ( mysqli_num_rows($result) > 0 ){
        $validar=1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login de usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <style>
        .image {
            background-size: cover;
        }
    </style>
</head>
<body style="background-image: url('https://www.solofondos.com/wp-content/uploads/2015/11/fondo.png');">
    <h2 style="color: #fff; text-align:center;font-weight: bold;">EYTD Almacen y ventas</h2>
    <div class="container" style="padding-top:60px">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel" style="background-color:teal;">
                    <div class="panel-heading" style="color:#fff; font-weight: bold; text-align:center">
                        Eytd Almacen y Ventas
                    </div>
                    <div class="panel-body">
                        <p>
                            <img src="img/item.jpg" class="image" height="190px">
                        </p>
                        <form id="formLogin" action="">
                            <label style="color:#fff;">Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label style="color:#fff;">Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <p></p>
                            <span class="btn btn-warning btn-sm" id="start">Entrar</span>
                            <?php if ( !$validar ): ?>
                            <a  href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <?php require_once "vistas/footer.php"; ?>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#start').click(function(){
            vacio = validarFormVacio('formLogin');
            if ( vacio > 0 ) {
                alert('Debes llenar todos los campos');
                return false;
            }
            datos=$('#formLogin').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/registroLogin/login.php",
                success:function(r){
                    if ( r == 1 ) {
                        window.location = "vistas/inicio.php"
                    } else {
                        alert("No se pudo acceder");
                    }
                }
            });
        });
    });
</script>