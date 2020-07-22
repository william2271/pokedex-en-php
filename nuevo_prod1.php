<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Alta de Nuevo Producto</h1> </span>
  		<br>
	  <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		<label>ID: </label>
  		<input type="text" id="ID" name="ID"><br>
  		
  		<label>FOTO: </label>
  		<input type="file" id="Foto" name="Foto" ><br>
		  
		  <label>Nombre: </label>
  		<input type="text" id="Nombre" name="Nombre"><br>
  		
  		<label>Tipo: </label>
  		<input type="text" id="Tipo" name="Tipo" ><br>
		  
		  <label>Ataque1: </label>
  		<input type="text" id="Ataque1" name="Ataque1"><br>
  		
  		<label>Ataque2: </label>
  		<input type="text" id="Ataque2" name="Ataque2" ><br>
		  
		  <label>Ataque3: </label>
  		<input type="text" id="Ataque3" name="Ataque3"><br>
  		
  		<label>Ataque4: </label>
  		<input type="text" id="Ataque4" name="Ataque4" ><br>
		  
		  <label>Region: </label>
  		<input type="text" id="Region" name="Region"><br>
  		
  		
  	
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>