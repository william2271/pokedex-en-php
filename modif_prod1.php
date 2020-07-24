<?php
  include 'conexion.php';

  $consulta=ConsultarProducto($_GET['ID']);
 
  function ConsultarProducto($ID)
  {

    $servidor = "localhost:3307";
$usuario = "root";
		$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
    $sentencia="SELECT * FROM pokemon WHERE ID=$ID  ";
    $resultado=mysqli_query($conexion,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
    


       $filas['ID'],
      $filas['Foto'],
      $filas['Nombre'],
       $filas['Tipo'],
      $filas['Ataque1'],
      $filas['Ataque2'],
       $filas['Ataque3'],
       $filas['Ataque4'],
      $filas['Region']







    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Pokemon</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body background="fondo.jpg">


<div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  	<input type="hidden" name="ID" value="<?php echo $_GET['ID']?> ">
  		<label>Foto: </label>
  		<input type="file" id="Foto" name="Foto"; value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Nombre: </label>
  		<input type="text" id="Nombre" name="Nombre" value="<?php echo $consulta[2] ?>"><br>
  		
  		<label>Tipo: </label>
  		
		  <select type="text" id="Tipo" name="Tipo" class="form-control form-control-sm">
		  <?php

          $query = $conexion -> query ("SELECT * FROM Tipo");
          while ($valores = mysqli_fetch_array($query)) {

echo '<option value="'.$valores["Tipo"].'">'.$valores["Tipo"].'</option>';
          }
        ?>
  
</select>

<label>Ataque1: </label>
  		<input type="text" id="Ataque1" name="Ataque1" value="<?php echo $consulta[4] ?>"><br>
      
      <label>Ataque2: </label>
  		<input type="text" id="Ataque2" name="Ataque2"; value="<?php echo $consulta[5] ?>" ><br>
  		
  		<label>Ataque3: </label>
  		<input type="text" id="Ataque3" name="Ataque3" value="<?php echo $consulta[6] ?>"><br>
      
      <label>Ataque4: </label>
  		<input type="text" id="Ataque4" name="Ataque4"; value="<?php echo $consulta[7] ?>" ><br>
		  <label>Region: </label>
  		
		  <select type="text" id="Region" name="Region" class="form-control form-control-sm">
		  <?php

          $query = $conexion -> query ("SELECT * FROM Region");
          while ($valores = mysqli_fetch_array($query)) {

echo '<option value="'.$valores["Region"].'">'.$valores["Region"].'</option>';
          }
        ?>
  
</select>
  	
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>








</body>
</html>