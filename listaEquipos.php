<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de los Eqeuipos de NBA</title>
    <link rel="stylesheet" href="master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
      <center>
        <a class="active" href="Index.php">Inicio</a>
        <a href="listaEquipos.php">Lista de equipos</a>
        <a href="indexjugadores.php">Insertar Jugadores</a>
        <a href="listajugadores.php">Lista de Jugadores</a>
      </center>
      <?php
      include"equipo.php";
      $nba= new equipo();
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
            <th>Equipo</th>
            <th>Ciudad</th>
            <th>Conferencia</th>
            <th>Division</th>
            <th>Borrar</th>
          </tr>

          <?php
          foreach ($resultado as $fila) {
            echo "<tr>";
              echo"<td>".$fila['Nombre']."</td>";
              echo"<td>".$fila['Ciudad']."</td>";
              echo"<td>".$fila['Conferencia']."</td>";
              echo"<td>".$fila['Division']."</td>";
              /*BOTON-Borrar equipo*/
              echo "<td>"."<a href='borrarDB.php?Nombre=".
              $fila['Nombre']."&Ciudad=".
              $fila['Ciudad']."&Conferencia=".
              $fila['Conferencia']."&Division=".
              $fila['Division']."'>BORRAR</a>"."</td>";
            echo "</tr>";
          }
        }
         ?>
  </body>
</html>
