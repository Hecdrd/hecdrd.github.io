<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['eliminar1'])) {
    $_SESSION['ecodi'] = null;
    $ecodigo = $_POST['ecodigo'];
    if (buscod($conexion, $tabla, $ecodigo) > 0) {
        $_SESSION['ecodi'] = $ecodigo;
        ?>
        <p>¿Seguro que desea eliminar este producto? (<b class="AAA">
                <?php echo $ecodigo ?>
            </b>)</p>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <input type="submit" name="si" class="btn btn-outline-light form-control mt-3" value="Si">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <input type="submit" name="no" class="btn btn-outline-light form-control mt-3" value="No">
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>
        <h6 class="bad">Ese codigo no existe</h6>
        <?php
    }
}
?>