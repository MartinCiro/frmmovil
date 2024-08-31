<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

    $sql = "INSERT INTO usuario (nombre, correo, telefono, usuario, password) VALUES ('$nombre', '$correo', '$telefono', '$usuario', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Usuario registrado exitosamente');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 
}
?>
