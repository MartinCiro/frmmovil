<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .btn-custom {
            background-color: #8DB600;
            color: white;
        }
        .btn-custom:hover {
            background-color: #7AA500;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inicio de Sesión</h2>
        <form action="php/validar_login.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-custom">Iniciar Sesión</button>
                <a href="php/registro.php" class="btn btn-custom">Regístrate aquí</a>
            </div>
        </form>
        <div class="text-right mt-3">
            <a href="php/forgot_password.php" class="btn btn-link">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
