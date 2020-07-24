<?php
	include 'conexion.php';

	ModificarTipo($_POST['ID'],$_POST['Tipo']);

	function ModificarTipo($ID,$Tipo)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );

		$sentencia="UPDATE Tipo SET ID='".$ID."',Tipo='".$Tipo."' WHERE ID='".$ID."' ";
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Tipo Modificado exitosamente");
	window.location.href='nuevoT1.php';
</script>	