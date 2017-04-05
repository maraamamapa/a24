<?php
include"equipo.php";

$nba= new equipo();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Informacion del Equipo Borrado</title>
  </head>

  <body>
    <a  href="Index.php">Inicio</a>
    <a  href="listaEquipos.php">Lista de equipos</a>

      <fieldset>
      <legend>Equipo Borrado</legend>
        <?php
        $nba->borrar($_GET['Nombre']);
        $Nombre=$_GET['Nombre'];
        $Ciudad=$_GET['Ciudad'];
        $Conferencia=$_GET['Conferencia'];
        $Division=$_GET['Division'];
        //Que equipo se ha eliminado
        echo "Equipo: ".$Nombre."<br>".
        "Ciudad que tenia asignado el equipo es: ".$Ciudad."<br>".
        "La conferencia del equipo es: ".$Conferencia."<br>".
        "Su division era: ".$Division."<br>";
         ?>
      </fieldset>

</body>
</html>
