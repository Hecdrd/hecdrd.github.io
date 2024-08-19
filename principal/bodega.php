<?php
$tabla = $_SESSION['tabla'];
$conexion = conex();
$consulta = "SELECT * FROM $tabla";
$res = mysqli_query($conexion, $consulta);
if ($res) {
    while ($row = $res->fetch_array()) {
        $Codigo = $row['Codigo'];
        $Nombre = $row['Nombre'];
        $Precio_Unitario = $row['Precio_Unitario'];
        $Vendidos = $row['Vendidos'];
        $En_Bodega = $row['En_Bodega'];
        ?>
        <tr>
            <td>
                <?php echo $Codigo; ?>
            </td>
            <td>
                <?php echo $Nombre; ?>
            </td>
            <td>
                <?php echo $Precio_Unitario; ?>
            </td>
            <td>
                <?php echo $Vendidos; ?>
            </td>
            <td>
                <?php echo $En_Bodega; ?>
            </td>
        </tr>
        <?php
    }
}
?>