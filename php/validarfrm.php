<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "Nuevo registro creado exitosamente";
    } else {
        $mensaje = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: formulario.php?mensaje=" . urlencode($mensaje));
    exit();
}
?>
