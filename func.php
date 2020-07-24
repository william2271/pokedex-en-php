<?php


class Pokemon {
  public $nombre;
  public $ID;
  public $Foto;
  public $Ataque1;
  public $Ataque2;
  public $Ataque3;
  public $Ataque4;
  public $Region;
 
  public function __construct($nombre, $ID,$Foto,$Ataque1,$Ataque2,$Ataque3,$Ataque4,$Region)
  {
      $this->nombre = $nombre;
      $this->ID = $ID;
      $this->Foto = $Foto;
      $this->Ataque1 = $Ataque1;
      $this->Ataque2 = $Ataque2;
      $this->Ataque3 = $Ataque3;
      $this->Ataque4 = $Ataque4;
      $this->Region = $Region;
  }


}
?>