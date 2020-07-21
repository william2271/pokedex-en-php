<?php
$password = "";
  $conexion = new mysqli("localhost","root",$password,"typen");
  mysqli_select_db("pokedex",$conexion);
  
  $mysqli->set_charset("utf8");
  
  //date_default_timezone_set("America/Mexico");
  /*
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
?>