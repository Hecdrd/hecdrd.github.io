<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['buscar'])) {
    $_SESSION['COD'] = null;
    $codigo1 = $_POST['codigo'];
    $cons1 = "SELECT * FROM $tabla WHERE Codigo='$codigo1'";
    $res1 = mysqli_query($conexion, $cons1);
    if ($res1) {
        $row = mysqli_fetch_array($res1);
        if ($row == null) {
            ?>
            <h6 class="bad">Código no existe</h6>
            <?php
        } else {
            ?>
            <h4>
                <?= $row['Nombre'] ?>
            </h4>
            <p>
                Código:<b>
                    <?= $row['Codigo'] ?>
                </b><br>
                Precio:<b>
                    <?= $row['Precio_Unitario'] ?>
                </b><br>
                Vendidos:<b>
                    <?= $row['Vendidos'] ?>
                </b><br>
                Bodega:<b>
                    <?= $row['En_Bodega'] ?>
                </b><br>
            </p>
            <?php
            $_SESSION['COD'] = $row['Codigo'];
        }
    } else {
        ?>
        <h6 class="bad">Error al ejecutar la consulta</h6>
        <?php
    }
}
?>