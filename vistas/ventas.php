<?php
    session_start();
    if ( isset($_SESSION['usuario']) ){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <?php require_once "menu.php"; ?>
</head>
<body style="background-image: url('https://www.solofondos.com/wp-content/uploads/2015/11/fondo.png');" >
        <div class="container">
            <h1 style="color:#fff">Venta de productos</h1>
            <div class="row">
                <div class="col-sm-12">
                    <span style="color:teal"class="btn btn-default" id="ventaProductosBtn">Vender producto</span>
                    <span style="color:teal" class="btn btn-default" id="ventasHechasBtn">Ventas hechas</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="ventaProductos"></div>
                    <div id="ventasHechas"></div>
                </div>
            </div>
        </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#ventaProductosBtn').click(function(){
            esconderSeccionVentas();
            $('#ventaProductos').load('ventas/ventasDeProductos.php');
            $('#ventaProductos').show();
        });

        $('#ventasHechasBtn').click(function(){
            esconderSeccionVentas();
            $('#ventasHechas').load('ventas/ventasyReportes.php');
            $('#ventasHechas').show();
        });
        function esconderSeccionVentas() {
            $('#ventaProductos').hide();
            $('#ventasHechas').hide();
        }


    });
</script>

<?php
    } else {
        header("location:../index.php");
    }
?>