<?php
if(isset($_GET['alert'])){
  $valor=$_GET['alert'];
  echo "<script type='text/javascript'>";
  echo "alert('$valor')";
  echo "</script>";
}
 ?>
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
            <a href="index.php" class="return">&#60;</a>
            <a href="event/close.php" class="close">X</a>

            <div class="Area-remove">
              <div class="LongArea">
                <h1>Seleccione una cantidad</h1>
              </div>
                <div class="Area AreaA">
                  <a href="event/cfremove.php?val=100">100</a>
                  <a href="event/cfremove.php?val=200">200</a>
                  <a href="event/cfremove.php?val=500">500</a>
                </div>
                <div class="Area AreaB">
                  <a href="event/cfremove.php?val=1000">1000</a>
                  <a href="event/cfremove.php?val=2000">2000</a>
                  <a href="event/cfremove.php?val=3000">3000</a>
                </div>
            </div>

          <?php
          }else {
            header("Location: index.php");
          }
          ?>


    </div>
  </body>
</html>
