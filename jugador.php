<?php
include "db.php";

class jugadores extends db{

  function __construct()
  {
    parent::__construct();
  }
  public function mostrar(){
    if($this->getErrorConexion()==false){
    $sql="SELECT * FROM jugadores";
    return   $resultado=$this->realizarConsulta($sql);
    }else{
      return null;
    }
  }

  public function insertar($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$nombre_equipo){
    if($this->getErrorConexion()==false){
    $sqlInsercion="INSERT INTO jugadores(codigo,Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) Values('".$codigo."','".$nombre."','".$procedencia."','".$altura."','".$peso."','".$posicion."','".$nombre_equipo."')";
    $this->conexion->query($sqlInsercion);
    $sql="SELECT * FROM jugadores WHERE codigo='".$codigo."' AND Nombre='".$nombre."' AND Procedencia='".$procedencia."' AND Altura='".$altura."' AND Peso='".$peso."' AND Posicion='".$posicion."' AND Nombre_equipo='".$nombre_equipo."'";
    return $resultado=$this->realizarConsulta($sql);
  }else{
    return null;
  }
  }

  public function actualizar($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$nombre_equipo){
  if($this->getErrorConexion()==false){
  $update="UPDATE jugadores SET Nombre='".$nombre."', Procedencia='".$procedencia."' , Altura='".$altura."' , Peso='".$peso."' , Posicion='".$posicion."' , Nombre_equipo='".$nombre_equipo."'
          WHERE codigo='".$codigo."'";
  $this->conexion->query($update);
  $sql="SELECT * FROM jugadores WHERE codigo='".$codigo."' AND Nombre='".$nombre."' AND Procedencia='".$procedencia."' AND Altura='".$altura."' AND Peso='".$peso."' AND Posicion='".$posicion."' AND Nombre_equipo='".$nombre_equipo."'";

  return $resultado=$this->realizarConsulta($sql);
  }else{
   return null;
  }
  }

  public function mostrarEquipos(){
    if($this->getErrorConexion()==false){
    $sql="SELECT distinct(Nombre) FROM equipos";
    return   $resultado=$this->realizarConsulta($sql);
    }else{
      return null;
    }
  }

  public function borrar($codigo){
    if($this->getErrorConexion()==false){
    $sql="SELECT * FROM jugadores WHERE Codigo='".$codigo."'";
    return   $resultado=$this->realizarConsulta($sql);
    $delete="DELETE FROM jugadores WHERE Codigo='".$codigo."'";
    $this->conexion->query($delete);
    }else{
      return null;
    }
  }
}
?>
