<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Contacto</h2>
    <form action="guardar.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Email: <input type="email" name="email" required><br>
        Mensaje: <textarea name="mensaje" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
