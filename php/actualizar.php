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
  <style>
  
    body{

background-image: url("imagenes/Actualizar.PNG");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
}

header{
  text-align-last:center; 
  background-color: black;
  padding: 20px;
  color:#fff;
}

h3 {
  text-align:left;
  font-weight: 500;
  padding: 40px;
}

form {
  background: radial-gradient(circle at 50% -20.71%, #ff97bd 0, #ff8ec2 10%, #ff85c7 20%, #fb7ccd 30%, #eb74d3 40%, #d86cd8 50%, #c166de 60%, #a663e4 70%, #8662e9 80%, #5c63ef 90%, #0065f3 100%);
  padding: 40px;
  border: radius 10px;
  width: 35%;
}

.btn-info {
  border: none;
  display: block;
  width: 80%;
  margin: 10px auto;
  color: #fff;
  height: 40px;
  font-size: 16px;
  cursor: pointer; 
}

.center-content {
  text-align: center;
}
  </style>
</head>

<body>

 <?php

require('config.php');

$id = $_POST['id'];


$sql = "SELECT * FROM tabla43 WHERE codigo=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      ?>
    
      <header><h2>Tienda Electronics<h2></header> 
      <div class="container">
      <h3>Actualización de productos</h3>
  <form action="actualizar2.php" method="POST">
    <div class="form-group">
      <label><b>Codigo de producto:<b></label>
      <input type="text" class="form-control" value=" <?php echo $row['codigo'] ?> " id="codigo" placeholder="Ingrese aquí el código del producto" name="codigo" readonly>
    </div>
    <div class="form-group">
      <label><b>Nombre del producto:<b></label>
      <input type="text" class="form-control" value=" <?php echo $row['nombre'] ?> " id="nombre" placeholder="Ingrese aquí el nombre del producto" name="nombre">
    </div>
    <div class="form-group">
      <label><b>Marca:<b></label>
      <input type="text" class="form-control" value=" <?php echo $row['marca'] ?> " id="marca" placeholder="Ingrese aquí la marca del producto" name="marca">
    </div>
    <div class="form-group">
      <label><b>Precio:<b></label>
      <input type="text" class="form-control" value=" <?php echo $row['precio'] ?> " id="precio" placeholder="Ingrese aquí el precio del producto" name="precio">
    </div>
    <div class="form-group">
      <label><b>Cantidad comprada:<b></label>
      <input type="text" class="form-control" value=" <?php echo $row['cantidad'] ?> " id="cantidad" placeholder="Ingrese aquí la cantidad comprada" name="cantidad">
    </div>
    <button type="submit" class="btn btn-info">Modificar producto</button>
  </form>
  </div>
  <div class="container"><br>
  <a class="btn btn-primary" href="index.html" role="button">Volver</a></div>
  
  <?php

    }


} else {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Ese producto no existe " . "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}

mysqli_close($conn);
?> 