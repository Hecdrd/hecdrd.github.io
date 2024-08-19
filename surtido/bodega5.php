<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
$consulta = "SELECT * FROM $tabla";
$res = mysqli_query($conexion, $consulta);
if ($res) {
    while ($row = $res->fetch_array()) {
        $Codigo = $row['Codigo'];
        $Nombre = $row['Nombre'];
        $En_Bodega = $row['En_Bodega'];
        ?>
        <tr>
            <td><?php echo $Codigo; ?></td>
            <td><?php echo $Nombre; ?></td>
            <td><?php echo $En_Bodega; ?></td>
        </tr>
        <?php
    }
}
?>