<?php
function conex()
{
    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $bd = "proyecto";
    $conexion = mysqli_connect("$servidor", "$usuario", "$contra", "$bd");
    return $conexion;
}
function buscod($conexion, $tabla, $codigo)
{
    $sql = "SELECT * FROM $tabla WHERE Codigo='$codigo'";
    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0) {
        return 1;
    } else {
        return 0;
    }
}
function bususu($conexion, $tabla, $usuario)
{
    $sql = "SELECT * FROM $tabla WHERE usuario='$usuario'";
    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0) {
        return 1;
    } else {
        return 0;
    }
}
?>