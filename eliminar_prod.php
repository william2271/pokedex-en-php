<?php

include "conexion.php";

	EliminarProducto($_GET['ID']);

	function EliminarProducto($ID)
	{
			$servidor = "localhost:3307";
	$usuario = "root";
			$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		$sentencia="DELETE FROM pokemon WHERE ID = $ID ";
	
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>