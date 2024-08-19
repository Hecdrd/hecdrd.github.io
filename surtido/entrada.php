<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['Agregar'])) {
    if ($_SESSION['COD'] == null) {
        ?>
        <h6 class="bad">Ningún producto seleccionado</h6>
        <?php
    } else {
        $codigo1 = $_SESSION['COD'];
        $cons1 = "SELECT En_Bodega FROM $tabla WHERE Codigo='$codigo1'";
        $res1 = mysqli_query($conexion, $cons1);
        if ($res1) {
            $row = mysqli_fetch_array($res1);
            $A = $row['En_Bodega'];
            $B = $_POST['Surtido'];
            $C = $A + $B;
            $cons2 = "UPDATE $tabla SET En_Bodega='$C' WHERE Codigo='$codigo1'";
            $res2 = mysqli_query($conexion, $cons2);
            if ($res2) {
                ?>
                <h6 class="ok">Datos actualizados</h6>
                <?php
            } else {
                ?>
                <h6 class="ok">No se pudo actualizar los datos</h6>
                <?php
            }
        } else {
            ?>
            <h6 class="bad">Error al realizar la consulta</h6>
            <?php
        }
        $_SESSION['COD'] = null;
    }
}
?>