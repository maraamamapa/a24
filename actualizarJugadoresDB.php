<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>..</title>
</head>
<body>
    <?php
    include"jugador.php";
    $nba= new jugadores();
    if ($nba->getErrorConexion()==true) {
      echo "No hay conexion";
    }
    else {
      if(isset($_POST) && (!empty($_POST))){
        $actualiza=$nba->actualizar($_POST["codigo"],$_POST["Nombre"],$_POST["Procedencia"],$_POST["Altura"],$_POST["Peso"],$_POST["Posicion"],$_POST["Nombre_equipo"]);
        ?>

        <center>
          <h2>Correcta actualización</h2>
          <a  href="Index.php">Inicio</a>
          <a  href="listaEquipos.php">Lista de equipos</a>
          <table >
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
                foreach ($actualiza as $fila) {
                        echo "<tr>";
                        echo "<td>".$fila["Nombre"]."</td>";
                        echo "<td>".$fila["Procedencia"]."</td>";
                        echo "<td>".$fila["Altura"]."</td>";
                        echo "<td>".$fila["Peso"]."</td>";
                        echo "<td>".$fila["Posicion"]."</td>";
                        echo "<td>".$fila["Nombre_equipo"]."</td>";

                        /*Botón de ACTUALIZAR*/
                        echo "<td>"."<a href='indexjugadores.php?
                            Nombre=".$fila["Nombre"].
                          "&Procedencia=".$fila["Procedencia"].
                          "&codigo=".$fila["codigo"].
                          "&Altura=".$fila["Altura"].
                          "&Peso=".$fila["Peso"].
                          "&Posicion=".$fila["Posicion"].
                          "&Nombre_equipo=".$fila["Nombre_equipo"].
                          "'>Actualizar</a>"."</td>";

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
                }
        ?>
    </body>
    </html>
