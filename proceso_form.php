<?php
$servername = "localhost:3306";
$username = "root";
$password = "123456";
$dbname = "parcialplp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$tipo_interes = $_POST['tipo_interes'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, email, telefono, tipo_interes, mensaje) VALUES ('$nombre', '$email', '$telefono', '$tipo_interes', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Formulario enviado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
