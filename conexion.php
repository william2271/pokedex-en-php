<?php
$servidor = "localhost";
$usuario = "root";
$conexion = mysqli_connect( $servidor, $usuario, "" );

  mysqli_select_db($conexion,"pokedex");
  
  $mysqli->set_charset("utf8");
  

?>