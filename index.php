
<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery-3.5.1.min.js"></script> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokemon</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body background="fondo.jpg">
<div class="todo">
  
  <div id="contenido">
  <button type="button"onclick=ocultar1() class="btn btn-danger">Mostrar tabla</button>
<button type="button" onclick=ocultar() class="btn btn-warning">mostrar tumbnail</button>




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
        <th> <a href="nuevoP1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        <th> <a href="nuevoT1.php"> <button type="button" class="btn btn-info">Nuevo Tipo</button> </a> </th>
        <th> <a href="nuevoR1.php"> <button type="button" class="btn btn-info">Nueva Region</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM pokemon";
      $resultado=mysqli_query($conexion,$sentencia);
      
      while($filas=mysqli_fetch_array($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['ID']; echo "</td>";
           echo "<td>"; echo "<img src=$filas[Foto].jpg  ALT=imagen width=100 height=100>"; echo "</td>";
          
         
          echo "<td>"; echo $filas['Nombre']; echo "</td>";
          echo "<td>"; echo $filas['Tipo']; echo "</td>";
          echo "<td>"; echo $filas['Ataque1']; echo "</td>";
          echo "<td>"; echo $filas['Ataque2']; echo "</td>";
          echo "<td>"; echo $filas['Ataque3']; echo "</td>";
          echo "<td>"; echo $filas['Ataque4']; echo "</td>";
          echo "<td>"; echo $filas['Region']; echo "</td>";
          echo "<td>  <a href='modP1.php?ID=".$filas['ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminarP.php?ID=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>                                          
  </div>
  
<div id = contenido2>

<button type="button"onclick=ocultar1() class="btn btn-danger">Mostrar tabla</button>
<button type="button" onclick=ocultar() class="btn btn-warning">mostrar tumbnail</button>

<?php

include "conexion.php";
      $sentencia="SELECT * FROM pokemon";
      $resultado=mysqli_query($conexion,$sentencia);
while($filas=mysqli_fetch_array($resultado))
{
echo  " <div class=card  style=margin: auto; width: 18rem; border-collapse: separate; border-spacing: 10px 5px;> " ;



 echo "<img src=$filas[Foto].jpg ALT=imagen width=100 height=100 class=card-img-top alt=>";

 echo" <div class=card-body>";
 echo "<h5 class=card-title>ID: $filas[ID]</h5>";
 echo "<h5 class=card-title>Nombre: $filas[Nombre]</h5>";
 echo "<h5 class=card-title>Tipo: $filas[Tipo]</h5>";
 echo "<h5 class=card-title>Ataque1: $filas[Ataque1]</h5>";
 echo "<h5 class=card-title>Ataque2: $filas[Ataque2]</h5>";
 echo "<h5 class=card-title>Ataque3: $filas[Ataque3]</h5>";
 echo "<h5 class=card-title>Ataque4: $filas[Ataque4]</h5>";
 echo "<h5 class=card-title>Region: $filas[Region]</h5>";
    
 echo "<a href='eliminarP.php?ID=".$filas['ID']."''>Eliminar</a>"; echo "-----";
  echo "<a href='modP1.php?ID=".$filas['ID']."''>Modificar</a>";
  echo "</div>";
echo "</div> ";

 }

?>




</div>


</div>



<script>
 
  document.getElementById('contenido2').style.display = 'none';
  function ocultar(){
document.getElementById('contenido').style.display = 'none';
document.getElementById('contenido2').style.display = 'block';
}
function ocultar1(){
document.getElementById('contenido2').style.display = 'none';
document.getElementById('contenido').style.display = 'block';
}


</script>

</body>
</html>