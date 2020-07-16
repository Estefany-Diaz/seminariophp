<?php 
     require_once "../../clases/Conexion.php";
    $c= new conectar();
    $conexion=$c->conexion();

    $sql="SELECT id_usuario,nombre,apellido,email from usuarios";
    $result=mysqli_query($conexion,$sql);

?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Usuarios :)</label></caption>
    <tr>
        <td style="color: #fff;">Nombre</td>
        <td style="color: #fff;">Apellido</td>
        <td style="color: #fff;">Usuario</td>
        <td style="color: #fff;">Editar</td>
        <td style="color: #fff;">Eliminar</td>
    </tr>
    <?php while($ver=mysqli_fetch_row($result)): ?>

    <tr>
        <td style="color: teal;"><?php echo $ver[1]; ?></td>
        <td style="color: teal;"><?php echo $ver[2]; ?></td>
        <td style="color: teal;"><?php echo $ver[3]; ?></td>
        <td>
            <span data-toggle="modal" data-target="#actualizaUsuarioModal" class="btn btn-warning btn-xs" onclick="agregaDatosUsuario('<?php echo $ver[0]; ?>')">
            <span class="glyphicon glyphicon-pencil"></span>
            </span>
        </td>
        <td>
            <span class="btn btn-danger btn-xs" onclick="eliminarUsuario('<?php echo $ver[0]; ?>')">
            <span class="glyphicon glyphicon-remove"></span>
            </span>
        </td>
    </tr>
<?php endwhile; ?>
</table>