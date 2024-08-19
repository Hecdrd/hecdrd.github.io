<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['venta'])) {
    $codigo = $_POST['codigo'];
    $cantidad = $_POST['cantidad'];
    if (buscod($conexion, $tabla, $codigo) > 0) {
        $sql = "SELECT * FROM $tabla WHERE Codigo='$codigo'";
        $query = mysqli_query($conexion, $sql);
        if ($query) {
            $fila = mysqli_fetch_array($query);
            //resta de la bodega
            $A = $fila['En_Bodega'] - $cantidad;
            //suma a vendidos
            $B = $fila['Vendidos'] + $cantidad;
            //codigo
            $C = $fila['Codigo'];
            if ($A > 0) {
                $sql2 = "UPDATE $tabla SET Vendidos='$B', En_Bodega='$A' WHERE Codigo='$C'";
                $query2 = mysqli_query($conexion, $sql2);
                if ($query2) {
                    ?>
                    <h6 class="ok">Datos actualizados correctamente</h6>
                    <?php
                } else {
                    ?>
                    <h6 class="bad">No se pudieron realizar los cambios</h6>
                    <?php
                }
            } else {
                ?>
                <h6 class="bad">Falta de existencias en bodega</h6>
                <?php
            }
        } else {
            ?>
            <h6 class="bad">Error al realizar la consulta</h6>
            <?php
        }
    } else {
        ?>
        <h6 class="bad">Código invalido</h6>
        <?php
    }
}
?>