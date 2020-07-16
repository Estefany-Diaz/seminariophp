<?php
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";
    session_start();

    $objeto = new Usuarios();
    $datos = array( $_POST['usuario'], $_POST['password']);

    echo $objeto->login( $datos );
?>