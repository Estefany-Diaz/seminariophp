<?php
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";

    $objeto = new Usuarios();
    $pass = sha1($_POST['password']);

    $datos = array( $_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $pass);

    echo $objeto->registroUsuario( $datos );
?>