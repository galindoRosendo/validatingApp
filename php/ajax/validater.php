<?php
sleep (5);
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require_once("../sql/dbCredentials.php");
$fechaCliente = $_POST['fechaCliente'];
$horaCliente = $_POST['horaCliente'];
$fechaTicket = $_POST['fechaTicket'];
$ticket = $_POST['ticket'];
$importe = $_POST['importe'];
$sucursal = $_POST['sucursal'];
$folio = $_POST['folio'];
$usuario = $_SESSION['idUsuario'];
$ip = $_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?:$_SERVER['REMOTE_ADDR']);

if ($folio % 3 == 0 ) {
  $estadoFolio = 'V';
}else {
    $estadoFolio = 'I';

}
    // Conexion
    $conn = new mysqli(NOMBRE_HOST, USUARIO,CONTRASENA,BASE_DE_DATOS);
    // Ver si no hay error
    if ($conn->connect_error) {
        die("<div class='formi'>
              <div class='error'>
                <h3>Error de conexion: ". $conn->connect_error."</h3>
              </div>
            </div>");
    }

    $sql = "INSERT INTO registrotickets(idregistrotickets, idUsuario, fechacliente, horacliente, fechaticket, ticket, importe, folio, estadofolio, sucursal, ip)
            VALUES( 0, $usuario, '$fechaCliente', '$horaCliente', '$fechaTicket', '$ticket', $importe, '$folio', '$estadoFolio','$sucursal', '$ip');";

    if ($conn->query($sql) === TRUE) {

      if ($estadoFolio=='V') {
        echo  "<div class='formi' id='response'>
                  <div class='info'>
                    <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Registro Exitoso </h1>
                  </div>
                </div>";
      }else {
        echo  "<div class='formi' id = 'response'>
                  <div class='error'>
                    <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Folio Invalido </h1>
                  </div>
                </div>";
      }

    } else {
        echo  "<div class='formi'>
                  <div class='error'>
                    <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Error: " . $sql . ":" . $conn->error." </h1>
                  </div>
                </div>";
    }


    $conn->close();

 ?>
