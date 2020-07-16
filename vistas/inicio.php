<?php
    session_start();
    if ( isset($_SESSION['usuario']) ){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="js/funciones.js"></script>
    <title>Inicio</title>
    <?php require_once "menu.php"; ?>
</head>
<body style="text-align:center;position:relative;background-image: url('https://www.solofondos.com/wp-content/uploads/2015/11/fondo.png');">
    <h3 style="color:#fff">Nosotros</h3>
    <div style="display: flex; padding:50px; text-align: justify; color:#fff;">
        <div style="padding-right:20px" >
            <h4 style="text-align: center">Misión</h4>
            <span style="text-align: justify;">
                Esta una empresa que se ha comprometido con cada uno de sus clientes en brindarles el mejor servicio posible para atender sus necesidades administrativas, este compromiso se traduce día a día en el trabajo y esfuerzo de una empresa que Evoluciona y se mantiene a la Vanguardia permitiéndonos permanecer en la preferencia de nuestros clientes.
                TDIAZ es un sistema diseñado por personas como usted, comerciantes y empresarios emprendedores con necesidades administrativas comunes en la mayoría de los giros comerciales. Nuestro sistema se ha basado en los requerimientos del usuario final,EL EMPRESARIO, EL VENDEDOR, por que sabemos que su necesidad es siempre la misma ADMINISTRAR de manera eficaz y eficiente, pero también de una manera fácil e intuitiva que le permita a usted encontrar la información que necesita con unos cuantos clics ya que sabemos que para usted lo más importante es saber "Qué tal va su negocio".
                Por ello continuaremos trabajando y esforzándonos para ofrecerle a usted siempre la mejor atención, atreves de mejores productos, mejoras constantes de nuestros servicios y la atención personalizada y el trato que usted se merece como siempre con la solidez y confianza que nos han caracterizado.
            </span>
        </div>
        <div>
            <img width="500px" src="https://conceptodefinicion.de/wp-content/uploads/2015/08/administrar-2-.jpg" alt="">
        </div>
    </div>
    <div style="display: flex; padding:50px; text-align: justify; color:#fff;">
        <div>
            <img  width="500px" src="https://s3-us-west-2.amazonaws.com/bfxpublicos/salesupblog/100001152639.png" alt="">
        </div>
        <div style="padding-left:20px" >
            <h4 style="text-align: center">Visión</h4>
            <span style="text-align: justify;">
                En TDIAZ nos hemos esforzado a un nivel superior para poder ofrecer a todos nuestros usuarios y clientes los mejores sistemas informáticos  con las herramientas necesarias para facilitar la administración diaria de su empresa.
                Estamos consientes del gran reto que implica ofrecer siempre a nuestros clientes la mayor calidad en productos informáticos y el mejor servicio al cliente, por eso trabajamos día a día con la premisa de garantizar la satisfacción de nuestros clientes en un 100 % y crecer con ellos y sus comercios y de esta manera poder posicionarnos no solo entre los grandes, si no entre los mejores proveedores de software administrativo.
            </span>
        </div>
    </div>
    <?php require_once "footer.php"; ?>
</body>
</html>
<?php
    } else {
        header("location:../index.php");
    }
?>