<?php

include "conexion.php";

	EliminarR($_GET['ID']);

	function EliminarR($ID)
	{
			$servidor = "localhost:3307";
	$usuario = "root";
			$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		$sentencia="DELETE FROM Region WHERE ID = $ID ";
	
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Region Eliminado exitosamente");
	window.location.href='nuevoR1.php';
</script>