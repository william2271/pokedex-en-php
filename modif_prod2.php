<?php
	include 'conexion.php';

	ModificarProducto($_POST['ID'], $_POST['Foto'], $_POST['Nombre'], $_POST['Tipo'], $_POST['Ataque1'], $_POST['Ataque2'], $_POST['Ataque3'], $_POST['Ataque4'], $_POST['Region']);

	function ModificarProducto($ID, $Foto, $Nombre,$Tipo,$Ataque1,$Ataque2,$Ataque3,$Ataque4,$Region)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );

		$sentencia="UPDATE pokemon SET ID='".$ID."', Nombre= '".$Nombre."', Foto='".$Foto."',Tipo='".$Tipo."', Ataque1= '".$Ataque1."', Ataque2='".$Ataque2."',Ataque3='".$Ataque3."', Ataque4= '".$Ataque4."', Region='".$Region."' WHERE ID='".$ID."' ";
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='index.php';
</script>	