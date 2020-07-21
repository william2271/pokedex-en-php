<?php
	include "conexion.php";

	EliminarProducto($_GET['no']);

	function EliminarProducto($no)
	{
		$sentencia="DELETE FROM productos WHERE no='".$no."' ";
		$mysqli->set_charset($sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>