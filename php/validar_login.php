<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM usuario WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            // Contraseña correcta, iniciar sesión
            $_SESSION['usuario'] = $usuario;
            header("Location: menuprincipal.php");
            exit();
        } else {
            // Contraseña incorrecta, mostrar mensaje de error
            echo "<script>
                    alert('Usuario o contraseña incorrectos');
                    window.location.href = '../index.php';
                  </script>";
        }
    } else {
        // Usuario no encontrado, mostrar mensaje de error
        echo "<script>
                alert('Usuario o contraseña incorrectos');
                window.location.href = '../index.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
