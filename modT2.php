<?php
	include 'conexion.php';

	ModificarProducto($_POST['ID'],$_POST['Tipo']);

	function ModificarProducto($ID,$Tipo)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );

		$sentencia="UPDATE Tipo SET ID='".$ID."',Tipo='".$Tipo."' WHERE ID='".$ID."' ";
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='nuevoT1.php';
</script>	