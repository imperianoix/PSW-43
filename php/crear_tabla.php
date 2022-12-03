 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad43";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE tabla43 (
codigo INT(10) PRIMARY KEY,
nombre VARCHAR(20),
marca VARCHAR(20),
precio VARCHAR(50),
cantidad VARCHAR(10)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla inventario creada satisfactoriamente";
} else {
    echo "Error al crear tabla inventario: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 