<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $token = bin2hex(random_bytes(50));
    $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

    $sql = "UPDATE usuario SET reset_token='$token', token_expiry='$expiry' WHERE correo='$correo'";
    if ($conn->query($sql) === TRUE) {
        $reset_link = "http://yourdomain.com/reset_password.php?token=$token";
        $subject = "Recuperación de Contraseña";
        $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: $reset_link";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($correo, $subject, $message, $headers)) {
            echo "Enlace de recuperación enviado a tu correo.";
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "Error al actualizar el token.";
    }

    $conn->close();
}
?>
