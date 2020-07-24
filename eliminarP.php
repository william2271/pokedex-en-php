<?php

include "conexion.php";

	EliminarP($_GET['ID']);

	function EliminarP($ID)
	{
			$servidor = "localhost:3307";
	$usuario = "root";
			$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		$sentencia="DELETE FROM pokemon WHERE ID = $ID ";
	
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Pokemon Eliminado exitosamente");
	window.location.href='index.php';
</script>