<?php
	include 'conexion.php';

	ModificarProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion'], $_POST['no']);

	function ModificarProducto($id_prod, $nom, $descrip, $no)
	{
		$sentencia="UPDATE productos SET id_producto='".$id_prod."', nombre= '".$nom."', descripcion='".$descrip."' WHERE no='".$no."' ";
		mysqli_query("pokedex",$sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='index.php';
</script>