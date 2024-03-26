<?php
$servername = "localhost";
$username = "ufx9cb7saqwf2";
$password = "S2dId1lYNElMZz09";
$dbname = "dbsq0s6rqebvlh";

// Conexión a MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
