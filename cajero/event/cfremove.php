<?php
  session_start();
  include("conexion.php");
  if (isset($_SESSION['t_Tarjeta'])) {
    $tarjeta=$_SESSION['t_Tarjeta'];
    $retiro= $_REQUEST['val'];


    $query ="SELECT * FROM tarjetas WHERE NoTarjeta='$tarjeta'";
    $LlamarId = $conexion->query($query);
    while ($raw = $LlamarId->fetch_assoc()) {
       $Cantidad = $raw['Cantidad'];
     }

     if ($Cantidad<$retiro) {
       $alert="No tienes balance disponible";
       header("Location:../remove.php?alert=$alert");
     }else {
       $Total=$Cantidad - $retiro;

       $query ="UPDATE tarjetas SET Cantidad='$Total' WHERE NoTarjeta='$tarjeta'";
       $resultado = $conexion->query($query);
       if($resultado){
         header("Location: ../romoveComplete.php");
       }else {
         $alert="error al intentar retirar";
         header("Location:../remove.php?alert=$alert");
       }
       echo $Total;
     }

  }else {
    header("Location: index.php");
  }
?>
