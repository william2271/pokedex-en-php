<?php

include "conexion.php";

	EliminarT($_GET['ID']);

	function EliminarT($ID)
	{
			$servidor = "localhost:3307";
	$usuario = "root";
			$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		$sentencia="DELETE FROM Tipo WHERE ID = $ID ";
	
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='nuevoT1.php';
</script>