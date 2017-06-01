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
            <h1>Hello World</h1>

          <?php
          }else {
            header("Location: index.php");
          }
          ?>



    </div>
  </body>
</html>
