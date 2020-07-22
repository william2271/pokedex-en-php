<?php
	include "conexion.php";

	EliminarProducto($_GET['ID']);

	function EliminarProducto($ID)
	{
		$sentencia="DELETE FROM productos WHERE no='".$ID."' ";
		mysqli_set_charset("",$sentencia);
		
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>