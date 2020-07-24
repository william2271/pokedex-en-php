<?php
	include 'conexion.php';

	ModificarRegion($_POST['ID'],$_POST['Region']);

	function ModificarRegion($ID,$Region)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );

		$sentencia="UPDATE Region SET ID='".$ID."',Region='".$Region."' WHERE ID='".$ID."' ";
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Region Modificado exitosamente");
	window.location.href='nuevoR1.php';
</script>	