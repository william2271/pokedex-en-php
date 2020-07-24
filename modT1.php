<?php
  include 'conexion.php';

  $consulta=ConsultarTipo($_GET['ID']);
 
  function ConsultarTipo($ID)
  {

    $servidor = "localhost:3307";
$usuario = "root";
		$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
    $sentencia="SELECT * FROM Tipo WHERE ID=$ID  ";
    $resultado=mysqli_query($conexion,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
    


       $filas['ID'],
      $filas['Tipo']







    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Tipo</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body background="fondo.jpg">


<div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Tipo</h1> </span>
  		<br>
	  <form action="modT2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  	<input type="hidden" name="ID" value="<?php echo $_GET['ID']?> ">
  
		  <label>Tipo: </label>
  		<input type="text" id="Tipo" name="Tipo" value="<?php echo $consulta[1] ?>"><br>
		  
  	
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>








</body>
</html>