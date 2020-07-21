<?php
	include 'conexion.php';

	NuevoProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion']);

	function NuevoProducto($id_prod, $nom, $descrip)
	{
		echo $sentencia="INSERT INTO productos (id_producto, nombre, descripcion) VALUES ('".$id_prod."', '".$nom."', '".$descrip."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='index.php';
</script>