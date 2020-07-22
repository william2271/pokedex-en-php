<?php
$servidor = "localhost:3307";
$usuario = "root";
$conexion = mysqli_connect( $servidor, $usuario, "","pokedex" );

  mysqli_select_db($conexion,"pokedex");
  

  

?>