<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de los Eqeuipos de NBA</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
      <center>
        <a class="active" href="Index.php">Inicio</a>
        <a href="listaEquipos.php">Lista de equipos</a>
        <a href="indexjugadores.php">Insertar Jugadores</a>
        <a href="listajugadores.php">Lista de Jugadores</a>
      </center>
      <?php
      include"jugador.php";
      $nba= new jugadores();
      if ($nba->getErrorConexion()==true) {
        echo "No hay conexion";
      }
      else {
          $resultado=$nba->mostrar();
          ?>
          <center>
            <h3>Equipos de la NBA</h3>
          <table border=1>
          <tr>
            <th>Nombre</th>
            <th>Procedencia</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Posicion</th>
            <th>Nombre del equipo</th>
            <th>Borrar</th>
          </tr>

          <?php
          foreach ($resultado as $fila) {
            echo "<tr>";
            echo "<td>".$fila["Nombre"]."</td>";
            echo "<td>".$fila["Procedencia"]."</td>";
            echo "<td>".$fila["Altura"]."</td>";
            echo "<td>".$fila["Peso"]."</td>";
            echo "<td>".$fila["Posicion"]."</td>";
            echo "<td>".$fila["Nombre_equipo"]."</td>";

            /* Botón de BORRAR*/
            echo "<td>"."<a href='borrarJugadoresDB.php?
              Nombre=".$fila["Nombre"].
            "&Procedencia=".$fila["Procedencia"].
            "&codigo=".$fila["codigo"].
            "&Altura=".$fila["Altura"].
            "&Peso=".$fila["Peso"].
            "&Posicion=".$fila["Posicion"].
            "&Nombre_equipo=".$fila["Nombre_equipo"].
              "'>Borrar</a>"."</td>";
            echo "</tr>";
          }
        }
         ?>
  </body>
</html>
