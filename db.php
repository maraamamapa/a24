<?php
class db{
  private $IP="localhost";
  private $USUARIO="root";
  private $CONTRASEÑA="";
  private $DB="nba";

  protected $conexion;
  private $error=false;
  private $error_msj="";

  function __construct(){
    $this->conexion = new mysqli($this->IP, $this->USUARIO, $this->CONTRASEÑA, $this->DB);
    if ($this->conexion->connect_errno){
      $this->error=true;
    }
  }
  public function getErrorConexion(){
    return $this->error;
  }
  function msjError(){
  return $this->error_msj;
  }

public function realizarConsulta($consulta){
  if($this->error==false){
    return $resultado = $this->conexion->query($consulta);
  }else{
    $this->error_msj="Imposible realizar la consulta: ".$consulta;
    return null;
  }
}
}
?>
