<?php
require_once 'db.php';
header('Content-Type: application/json');

$db = Database::Conectar();
$resultado = [];
// Ejecutar función dependiendo del parámetro enviado
if (isset($_GET['funcion']) && $_GET['funcion'] === 'buscarUsuarios') {
    $sql = "SELECT * FROM personas";
    $res = $db->query($sql);

    if ($res && $res->num_rows > 0) {
        while ($fila = $res->fetch_assoc()) {
            $resultado[] = $fila;
        }
    }
    echo json_encode($resultado); // ✅ Siempre devolver JSON
} else {
    echo json_encode([]); // ✅ JSON vacío si no se solicita buscarUsuarios
}
?>