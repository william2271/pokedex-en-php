<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Region</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body background="fondo.jpg">
<div class="todo">
  
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Nuevo Region</h1> </span>
  		<br>
	  <form action="nuevoR2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	 
  		<input  type="hidden" id="ID" name="ID"><br>	
  		<label>Region: </label>
  		<input type="text" id="Region" name="Region"><br>	
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	

</div>

<div class="todo">
  
  <div id="contenido">
  	<table class="table table-dark" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
		  <th>ID.</th>
  			<th>Region.</th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM Region";
      $resultado=mysqli_query($conexion,$sentencia);
      
      while($filas=mysqli_fetch_array($resultado))
      {
		echo "<tr>";
		echo "<td>"; echo $filas['ID']; echo "</td>";
          echo "<td>"; echo $filas['Region']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?ID=".$filas['ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?ID=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>                                          
  </div>
  


</div>

</body>
</html>