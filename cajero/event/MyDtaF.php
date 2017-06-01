<?php
  session_start();

  $Card = $_POST['SDCard'];
  $Pin = $_POST['SDPin'];

  include("conexion.php");

  $proceso = $conexion->query("SELECT * FROM 	tarjetas WHERE NoTarjeta='$Card' AND CodePin='$Pin'");

  if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['t_Tarjeta'] =$Card;
    header("Location: ../index.php");
    echo "Sip";
  }else {
    header("Location: ../index.php");
    echo "Nope";
  }


 ?>
