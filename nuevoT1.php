<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Tipo</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body background="fondo.jpg">
<div class="todo">
  
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Nuevo Tipo</h1> </span>
  		<br>
	  <form action="nuevoT2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	 
  		<input  type="hidden" id="ID" name="ID"><br>	
  		<label>Tipo: </label>
  		<input type="text" id="Tipo" name="Tipo"><br>	
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
  			<th>Tipo.</th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM Tipo";
      $resultado=mysqli_query($conexion,$sentencia);
      
      while($filas=mysqli_fetch_array($resultado))
      {
		echo "<tr>";
		echo "<td>"; echo $filas['ID']; echo "</td>";
          echo "<td>"; echo $filas['Tipo']; echo "</td>";
          echo "<td>  <a href='modT1.php?ID=".$filas['ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminarT.php?ID=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>                                          
  </div>
  


</div>

</body>
</html>