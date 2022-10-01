<?php
if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$correo = $_POST['correo'];
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJEMPLO VIDEO</title>
	<link rel="stylesheet" type="text/css" href="ejemplo video.css">
</head>
<body>

	<form action="<?php echo 
	htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <h1>Registro</h1>
      <label for="">Nombre:</label>
      <input type="text" name="nombre" value="<?php 
      if(isset($nombre)) echo $nombre?>">
      <label for="">Edad:</label>
      <input type="text" name="edad" value="<?php 
      if(isset($edad)) echo $edad?>">
      <label for="">Correo:</label>
      <input type="text" name="correo" value="<?php 
      if(isset($correo)) echo $correo?>">
      <input type="submit" name="submit">
      <?php 
      	include("validar-form.php")
      ?>
    </form>

</body>
</html>