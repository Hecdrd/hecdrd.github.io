<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['si'])) {
    $ecodi = $_SESSION['ecodi'];
    $sql = "DELETE FROM $tabla WHERE Codigo='$ecodi'";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        ?>
        <h6 class="ok">Producto eliminado</h6>
        <?php
        $_SESSION['ecodi'] = null;
    } else {
        ?>
        <h6 class="bad">No se pudo eliminar el producto</h6>
        <?php
        $_SESSION['ecodi'] = null;
    }
}
if (isset($_POST['no'])) {
    $_SESSION['ecodi'] = null;
    return;
}
?>