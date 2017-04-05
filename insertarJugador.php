<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Equipo Insertado</title>
</head>
<body>
  <a class="active" href="Index.php">Inicio</a>
  <a href="listaEquipos.php">Lista de equipos</a>
  <a href="indexjugadores.php">Insertar Jugadores</a>
  <a href="listajugadores.php">Lista de Jugadores</a>

    <?php
    include"jugador.php";
    $nba= new jugadores();
    if ($nba->getErrorConexion()==true) {
      echo "No hay conexion";
    }
    else {
      if(isset($_POST) && (!empty($_POST))){
        $insertar=$nba->insertar($_POST["codigo"],$_POST["Nombre"],$_POST["Procedencia"],$_POST["Altura"],$_POST["Peso"],$_POST["Posicion"],$_POST["Nombre_equipo"]);
        ?>
        <center>
          <table border="1">
            <tr>
              <th>Nombre</th>
              <th>Procedencia</th>
              <th>Altura</th>
              <th>Peso</th>
              <th>Posicion</th>
              <th>Nombre del equipo</th>
              <th>Actualizar</th>
              <th>Borrar</th>
            </tr>

            <?php
            foreach ($insertar as $fila ) {

                  echo "<tr>";
                  /*Muestra los datos que has añadido, en este caso, el jugador y sus características*/
                echo "<td>".$fila["Nombre"]."</td>";
                echo "<td>".$fila["Procedencia"]."</td>";
                echo "<td>".$fila["Altura"]."</td>";
                echo "<td>".$fila["Peso"]."</td>";
                echo "<td>".$fila["Posicion"]."</td>";
                echo "<td>".$fila["Nombre_equipo"]."</td>";

                  /*Actualizar */
                echo "<td>"."<a href='indexjugadores.php?
                    Nombre=".$fila["Nombre"].
                  "&Procedencia=".$fila["Procedencia"].
                  "&codigo=".$fila["codigo"].
                  "&Altura=".$fila["Altura"].
                  "&Peso=".$fila["Peso"].
                  "&Posicion=".$fila["Posicion"].
                  "&Nombre_equipo=".$fila["Nombre_equipo"].
                  "'>Actualizar</a>"."</td>";

                  /*Borrar */
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
        }
        ?>
    </body>
    </html>
