<?php
	include 'conexion.php';

	NuevoProducto($_POST['Tipo'],$_POST['ID']);

	function NuevoProducto($Tipo,$ID)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		 $sentencia="INSERT INTO Tipo (ID,Tipo) VALUES ('".$ID."','".$Tipo."')";
		mysqli_query($conexion,$sentencia);
		
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='nuevoT1.php';
</script>