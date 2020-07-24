<?php
	include 'conexion.php';

	NuevoRegion($_POST['Region'],$_POST['ID']);

	function NuevoRegion($Region,$ID)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		 $sentencia="INSERT INTO Region (ID,Region) VALUES ('".$ID."','".$Region."')";
		mysqli_query($conexion,$sentencia);
		
	}
?>

<script type="text/javascript">
	alert("Region Ingresado exitosamente");
	window.location.href='nuevoR1.php';
</script>