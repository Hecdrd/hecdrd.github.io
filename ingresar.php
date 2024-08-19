<?php
$conexion = conex();
if (isset($_POST['btn'])) {
    $_SESSION['nombreusuario'] = null;
    $_SESSION['tabla'] = null;
    $usuario = trim($_POST['usuario']);
    $contra = trim($_POST['contra']);
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contra'";
    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0) {
        $fila = mysqli_fetch_array($query);
        $_SESSION['tabla'] = $usuario;
        $_SESSION['nombreusuario'] = $fila['nombre'];
        header("location:principal/home.php");
    } else {
        ?>
        <h6 class="bad">Nombre de usuario o contraseña incorrectos</h6>
        <?php
    }
}
?>