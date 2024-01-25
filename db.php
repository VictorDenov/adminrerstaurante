<?php
// Configuración de la base de datos
$host = "bl0wa2m5azpzbzvdcqvp-mysql.services.clever-cloud.com";
$database = "bl0wa2m5azpzbzvdcqvp";
$user = "umhwkiqvyol6lj5o";
$port = 21682;
$password = "yG72JY7HveBnCJsbQ46";

// Intenta realizar la conexión
$conn = new mysqli($host, $user, $password, $database, $port);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

// Ahora puedes realizar consultas u operaciones en la base de datos aquí

// Cierra la conexión al finalizar
$conn->close();
?>
