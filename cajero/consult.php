<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cajero</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="machine">


      <?php
          session_start();

          if (isset($_SESSION['t_Tarjeta'])) {

            include("event/conexion.php");
            $proceso = $conexion->query("SELECT * FROM 	tarjetas WHERE NoTarjeta='$_SESSION[t_Tarjeta]'");

            $resultado = mysqli_fetch_array($proceso)
          ?>
            <!-- Si hay session -->
            <a href="index.php" class="return">&#60;</a>
            <a href="event/close.php" class="close">X</a>

            <div class="Area-consult">
                <h1>Esta tarjeta tiene un acumulado de:</h1>
                <h2><?php echo $resultado['Cantidad'].'$ Pesos Dominicanos'; ?></h2>
            </div>

          <?php
          }else {
            header("Location: index.php");
          }
          ?>


    </div>
  </body>
</html>
