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


          ?>
            <!-- Si hay session -->

            <div class="Area-complete">
              <h1>Retiro exitoso</h1>
              <h2>No olvide recoger su dinero</h2>
              <h3>v</h3>
            </div>

            <a href="event/close.php" class="close2">Salir</a>

          <?php
          }else {
            header("Location: index.php");
          }
          ?>



    </div>
  </body>
</html>
