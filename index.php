<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery-3.5.1.min.js"></script> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body background="fondo.jpg">
<div class="todo">
  
  <div id="contenido">
  	<table class="table table-dark" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>ID.</th>
  			<th>Foto</th>
  			<th>Nombre</th>
  			<th>Tipo</th>
        <th>Ataque1</th>
        <th>Ataque2</th>
        <th>Ataque3</th>
        <th>Ataque4</th>
        <th>Region</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM pokemon";
      $resultado=mysqli_query($conexion,$sentencia);
      
      while($filas=mysqli_fetch_array($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['ID']; echo "</td>";
          echo "<td>"; echo $filas['Foto']; echo "</td>";
          echo "<td>"; echo $filas['Nombre']; echo "</td>";
          echo "<td>"; echo $filas['Tipo']; echo "</td>";
          echo "<td>"; echo $filas['Ataque1']; echo "</td>";
          echo "<td>"; echo $filas['Ataque2']; echo "</td>";
          echo "<td>"; echo $filas['Ataque3']; echo "</td>";
          echo "<td>"; echo $filas['Ataque4']; echo "</td>";
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