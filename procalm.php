<?php
require_once 'db.php';
$baseDatos = Database::Conectar();

$resultado = mysqli_query($baseDatos, "CALL listar_personas()");


if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Correo: " . $fila['correo'] . "<br>";
    }
    mysqli_free_result($resultado);
} else {
    echo "Error al ejecutar CALL: " . mysqli_error($baseDatos);
}

mysqli_close($baseDatos);

?>