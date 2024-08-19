<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
$consulta = "SELECT * FROM $tabla";
$res = mysqli_query($conexion, $consulta);
if ($res) {
    while ($row = $res->fetch_array()) {
        $Codigo = $row['Codigo'];
        $Nombre = $row['Nombre'];
        ?>
        <tr>
            <td><?php echo $Codigo; ?></td>
            <td><?php echo $Nombre; ?></td>
        <?php
    }
}
?>