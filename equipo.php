<?php
include "db.php";

class equipo extends db{

  function __construct()
  {
    parent::__construct();
  }
  public function mostrar(){
    if($this->getErrorConexion()==false){
    $sql="SELECT * FROM equipos";
    return   $resultado=$this->realizarConsulta($sql);
    }else{
      return null;
    }
  }



  public function insertar($nombre,$ciudad,$conferencia,$division){
  if($this->getErrorConexion()==false){
    $sqlInsercion="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) Values('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
    $this->conexion->query($sqlInsercion);
    $sql="SELECT * FROM equipos WHERE Nombre='".$nombre."' AND Ciudad='".$ciudad."' AND Conferencia='".$conferencia."' AND Division='".$division."'";
    return $resultado=$this->realizarConsulta($sql);
  }else{
    return null;
  }
  }

  public function actualizar($nombre,$ciudad,$conferencia,$division){
  if($this->getErrorConexion()==false){
  $update="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
  $this->conexion->query($update);
  $sql="SELECT * FROM equipos WHERE Nombre='".$nombre."' AND Ciudad='".$ciudad."' AND Conferencia='".$conferencia."' AND Division='".$division."'";
  return $resultado=$this->realizarConsulta($sql);
  }else{
  return null;
  }
  }


  public function borrar($nombre){
    if($this->getErrorConexion()==false){
    $sql="SELECT * FROM equipos WHERE Nombre='".$nombre."'";
    return   $resultado=$this->realizarConsulta($sql);
    $delete="DELETE FROM equipos WHERE Nombre='".$nombre."'";
    $this->conexion->query($delete);
    }else{
    return null;
    }
  }
}
?>
