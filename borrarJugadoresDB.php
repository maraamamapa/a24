<?php
include"jugador.php";

$nba= new jugadores();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Informacion del Equipo Borrado</title>
  </head>

  <body>
    <a class="active" href="Index.php">Inicio</a>
    <a href="listaEquipos.php">Lista de equipos</a>
    <a href="indexjugadores.php">Insertar Jugadores</a>
    <a href="listajugadores.php">Lista de Jugadores</a>

      <fieldset>
      <legend>Equipo Borrado</legend>
        <?php
        $nba->borrar($_GET['codigo']);
        $Nombre=$_GET['Nombre'];
        $Procedencia=$_GET['Procedencia'];
        $Altura=$_GET['Altura'];
        $Peso=$_GET['Peso'];
        $Posicion=$_GET['Posicion'];
        $Nombre_equipo=$_GET['Nombre_equipo'];
        //Que equipo se ha eliminado
        echo "Nombre del Jugador: ".$Nombre."<br>".
        "Procedencia del Jugador: ".$Procedencia."<br>".
        "Altura: ".$Altura."<br>".
        "Peso: ".$Peso."<br>".
        "Posicion: ".$Posicion."<br>".
        "Nombre del equipo: ".$Nombre_equipo."<br>";
         ?>
      </fieldset>

</body>
</html>
