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
                <!-- Menu de deposito y consulta -->
                <a href="event/close.php" class="close">X</a>
                <div class="Area-option">
                  <h2>Seleccione una opci&oacute;n</h2>
                  <a href="consult.php">Consultar</a>
                  <a href="remove.php">Retirar</a>
                </div>
              <?php
              }else {
              ?>

                <!-- Ingreso de tarjeta y codigo -->
                <div class="Area-Card">

                    <h1>BANCO <b>GIG</b></h1>

                  <form class="Card" action="event/MyDtaF.php" method="Post">
                      <label for="Card">Ingrese su numero de tarjeta</label>
                      <input type="text" name="SDCard" class="SQR" maxlength="16">
                      <label for="Pin">Ingrese su Pin de 4 dijitos</label>
                      <input type="password" name="SDPin" maxlength="4" class="SQR SQR-SZ">
                      <input type="submit" value="Ingresar" class="BTN">
                  </form>
                </div>

              <?php
              }
              ?>



    </div>
  </body>
</html>
