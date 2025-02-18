<?php
// Conectar a la base de datos
$conexion = new mysqli("base_de_datos", "usuario", "clave", "contacto_db");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Insertar datos en la base de datos
$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje guardado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
