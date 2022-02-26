<?php
    $codigo= $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
?>
<div class = "container"><br>
    <table class ="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>DIRECCION</th>
                <th>TELEFONO.</th>
                <th>EMAIL.</th>
            </tr>
            <tr>
                <td><?php echo $codigo ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo  $apellido ?></td>
                <td><?php echo $direccion ?></td>
                <td><?php echo $telefono ?></td>
                <td><?php echo $email?></td>
            </tr>
        </tbody>


    </table>


</div>


