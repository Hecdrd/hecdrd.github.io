<?php
$conexion = conex();
$tabla="usuarios";
if (isset($_POST['btn'])) {
    $usuario = trim($_POST['usuario']);
    if ($_POST['contra'] == $_POST['contra2']) {
        if (bususu($conexion, $tabla, $usuario) > 0) {
            ?>
            <h6 class="bad">Ese nombre de usuario ya existe</h6>
            <?php
        } else {
            $sitiene = 0;
            $largo = strlen($usuario);
            for ($i = 0; $i < $largo; $i++) {
                $caracter = substr($usuario, $i, 1);
                if ($caracter == " ") {
                    $sitiene += 1;
                    break;
                }
            }
            if ($sitiene > 0) {
                ?>
                <h6 class="bad">Su nombre de usuario contiene espacios, intente no ponerlos</h6>
                <?php
            } else {
                $nombre = trim($_POST['nombre']);
                $contra = trim($_POST['contra']);
                $consulta = "INSERT INTO usuarios(usuario, nombre, contraseña) VALUES ('$usuario', '$nombre', '$contra')";
                $consulta2 = "CREATE TABLE $usuario (Codigo VARCHAR(3) PRIMARY KEY, Nombre VARCHAR(30), Precio_Unitario INT(255), Vendidos INT(6), En_Bodega INT(6))";
                $resultado = mysqli_query($conexion, $consulta);
                $resultado2 = mysqli_query($conexion, $consulta2);
                if ($resultado and $resultado2) {
                    ?>
                    <h6 class="ok">¡Usuario creado correctamente!</h6>
                    <?php
                } else {
                    ?>
                    <h6 class="bad">¡Lo siento, algo ha salido mal!</h6>
                    <?php
                }
            }
        }
    } else {
        ?>
        <h6 class="bad">¡Las contraseñas no coinciden!</h6>
        <?php
    }
}
?>