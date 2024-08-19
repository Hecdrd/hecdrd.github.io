<?php
$conexion = conex();
$tabla = $_SESSION['tabla'];
if (isset($_POST['agregar'])) {
    $Codigo = $_POST['codigo'];
    $Nombre = $_POST['producto'];
    $Precio_Unitario = $_POST['precio'];
    $Vendidos = 0;
    $En_Bodega = $_POST['bodega'];
    if(buscod($conexion, $tabla, $Codigo)>0){
        ?>
        <h6 class="bad">Ya existe un producto con ese código</h6>
        <?php
    }else{
        $consulta = "INSERT INTO $tabla (Codigo, Nombre, Precio_Unitario, Vendidos, En_Bodega) VALUES ('$Codigo','$Nombre','$Precio_Unitario','$Vendidos','$En_Bodega')";
        $res = mysqli_query($conexion, $consulta);
        if ($res) {
            ?>
            <h6 class="ok">Producto agregado a la bodega</h6>
            <?php
        } else {
            ?>
            <h6 class="bad">Error al agregar el producto</h6>
            <?php
        }
    }
}
?>