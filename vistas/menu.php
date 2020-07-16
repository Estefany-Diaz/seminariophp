<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <?php
        require_once "dependencias.php";
    ?>
</head>
<body>
    <div id="nav">
        <div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100"
            style="background-color:teal; border-color:teal"
        >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="inicio.php">
                                <span class="glyphicon glyphicon-home"></span> 
                                Inicio
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                Administrar Articulos <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="categorias.php">Categorias</a></li>
                                <li><a href="articulos.php">Articulos</a></li>
                            </ul>
                        </li>

                        <?php 
                            if($_SESSION["usuario"] == "mugui"):
                        ?>
                        <li>
                            <a href="usuarios.php">
                                <span class="glyphicon glyphicon-user"></span> Administrar usuarios
                            </a>
                        </li>
                        <?php 
                        endif;
                        ?>
                        
                        <li>
                            <a href="clientes.php">
                                <span class="glyphicon glyphicon-user"></span> Clientes
                            </a>
                        </li>
                        <li>
                            <a href="ventas.php">
                                <span class="glyphicon glyphicon-usd"></span> Vender Articulo
                            </a>
                        </li>
                        <li class="dropdown" >
                            <a href="#" style="color: black"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user"></span> 
                                Usuario:<?php echo $_SESSION['usuario']; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a style="color: red" href="../procesos/salir.php">
                                        <span class="glyphicon glyphicon-off"></span> Salir
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!--/.nav-collapse -->
            </div>
        <!--/.contatiner -->
        </div>
    </div>
</body>
</html>
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 150) {
            $('.logo').height(200);
        }
        else {
            $('.logo').height(100);
        }
    });
</script>