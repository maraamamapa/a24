<?php
include"jugador.php";

$nba= new jugadores();
?>  <!DOCTYPE html>  <htm
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    legend{
      font-family: verdana;
    font-size: 17px;
    }
    h3{
    font-size: 25px;
    }
    </style>
  </head>
  <body>
      <?php
      if (empty($_GET)) {
      ?>
      <center>
      <h1> Base de Datos -NBA</h1>
      <a class="active" href="Index.php">Inicio</a>
      <a href="listaEquipos.php">Lista de equipos</a>
      <a href="indexjugadores.php">Insertar Jugadores</a>
      <a href="listajugadores.php">Lista de Jugadores</a>
      </center>

      <fieldset>
      <legend>INSERTA UN NUEVO EQUIPO</legend>
        <form action="insertarJugador.php" method="post">
          <input type="hidden" value="input" name="tipo" />

          <label>Codigo:</label><br>
          <input type="text" name="codigo" value=""><br>

          <label>Nombre:</label><br>
          <input type="text" name="Nombre" value=""><br>

          <label>Procedencia:</label><br>
          <input type="text" name="Procedencia" value=""><br>

          <label>Altura: </label><br>
          <input type="text" name="Altura" value=""><br>

          <label>Peso:</label><br>
          <input type="text" name="Peso" value=""><br>

          <label>Posicion: </label><br>
          <input type="text" name="Posicion" value=""><br>


          <select name="Nombre_equipo">
            <option value="">Seleccione un Equipo</option>
            		<?php
                  $resultado=$nba->mostrarEquipos();
            		foreach($resultado as $fila ){
            			echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            		}
            		?>
            </select><br>

          <br><input type="submit" value="Añadir jugador">



        </form>
        </fieldset>

      <?php
      }
       ?>
        <?php
        if (!empty($_GET)) {
        ?>
      <fieldset>
      <legend>Busqueda y Inserccion de Equipos</legend>
        <form action="actualizarJugadoresDB.php" method="post">
          <input type="hidden" value="input" name="tipo" />
          <label>Codigo:</label><br>
          <input type="text" name="codigo" value="<?=$_GET['codigo'];?>" readonly="readonly"><br>
          <label>Nombre:</label><br>
          <input type="text" name="Nombre" value="<?=$_GET['Nombre'];?>" ><br>
          <label>Procedencia:</label><br>
          <input type="text" name="Procedencia" value="<?=$_GET["Procedencia"]?>"><br>
          <label>Altura:</label><br>
          <input type="text" name="Altura" value="<?=$_GET["Altura"]?>"><br>
          <label>Peso:</label><br>
          <input type="text" name="Peso" value="<?=$_GET["Peso"]?>"><br>
          <label>Posicion:</label><br>
          <input type="text" name="Posicion" value="<?=$_GET["Posicion"]?>"><br>
          <br>
          <select name="Nombre_equipo">
            <option value="<?=$_GET["Nombre_equipo"]?>"><?=$_GET["Nombre_equipo"]?></option>
            		<?php
                  $resultado=$nba->mostrarEquipos();
            		foreach($resultado as $fila ){
            			echo "<option value=".$fila['Nombre'].">".$fila['Nombre']."</option>";
            		}
            		?>
            </select><br>
          <input type="submit" value="Actualizar">
        </form>
      </fieldset>
        <?php
        }
        ?>

    </section>
</body>
</html>
