<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE reset_token='$token' AND token_expiry > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE usuarios SET password='$new_password', reset_token=NULL, token_expiry=NULL WHERE reset_token='$token'";
        if ($conn->query($sql) === TRUE) {
            echo "Contraseña actualizada correctamente.";
        } else {
            echo "Error al actualizar la contraseña.";
        }
    } else {
        echo "Token inválido o expirado.";
    }

    $conn->close();
}
?>
