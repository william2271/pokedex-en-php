<?php
	include 'conexion.php';

	NuevoProducto($_POST['ID'], $_POST['Foto'], $_POST['Nombre'], $_POST['Tipo'], $_POST['Ataque1'], $_POST['Ataque2'], $_POST['Ataque3'], $_POST['Ataque4'], $_POST['Region']);

	function NuevoProducto($ID, $Foto, $Nombre,$Tipo,$Ataque1,$Ataque2,$Ataque3,$Ataque4,$Region)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );
		 $sentencia="INSERT INTO pokemon (ID, Foto, Nombre,Tipo,Ataque1,Ataque2,Ataque3,Ataque4,Region) VALUES ('".$ID."', '".$Foto."', '".$Nombre."','".$Tipo."','".$Ataque1."','".$Ataque2."','".$Ataque3."','".$Ataque4."','".$Region."')";
		mysqli_query($conexion,$sentencia);
		
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='index.php';
</script>