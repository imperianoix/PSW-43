<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tienda Electronics</title>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>



 <?php

require('config.php');

$i = $_POST['id'];
$n = $_POST['nombre'];
$m = $_POST['marca'];
$p = $_POST['precio'];
$c = $_POST['cantidad'];


$sql = "INSERT INTO tabla43 (codigo, nombre, marca, precio, cantidad) VALUES ('$i', '$n', '$m', '$p', '$c')";

if (mysqli_query($conn, $sql)) {
 
?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Excelente!</h4>
          <button class="close" onclick="location.href='../form_insertar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        Los datos se han grabado satisfactoriamente
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../form_insertar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php
} else 
{



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../form_insertar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php
          echo "Error grabando datos: <br>" . $sql . "<br>" . mysqli_error($conn);
          ?> 

        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../form_insertar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php

 //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 //  echo '<script language="javascript">alert("Los datos se han grabado satisfactoriamente'.$i.'");window.location.href="form_insertar.html"</script>';

}

mysqli_close($conn);

?> 