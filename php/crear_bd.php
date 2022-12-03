 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Creando la conexión
$conn = mysqli_connect($servername, $username, $password);
// Validando la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Creando base de datos
$sql = "CREATE DATABASE bdunad43";
if (mysqli_query($conn, $sql)) {
    echo "La base de datos ha sido creada satisfactoriamente";
} else {
    echo "Error al crear la base de datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 