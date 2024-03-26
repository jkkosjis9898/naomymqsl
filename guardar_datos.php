<?php
// Importar el archivo de conexión a la base de datos
require_once 'conexion.php';

if (isset($_POST['submit'])) {
    // Recibir los datos del formulario
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Escapar los datos para evitar inyección SQL (es importante hacer esto)
    $correo = mysqli_real_escape_string($conn, $correo);
    $password = mysqli_real_escape_string($conn, $password);

    // Consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO usuarios (correo, password) VALUES ('$correo', '$password')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        // Redireccionar a la misma página después de guardar los datos
        header("Location: index.html");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Error al guardar los datos: " . mysqli_error($conn);
    }
}

// Cerrar la conexión
mysqli_close($conn);
?>
