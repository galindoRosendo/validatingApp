<?php
  header('Access-Control-Allow-Origin: *');
  require_once("../sql/dbCredentials.php");
  session_start();
  sleep (3);
  error_reporting(E_ALL ^ E_NOTICE);
  //dataArray to insert in registrotickets
  $ip = $_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?:$_SERVER['REMOTE_ADDR']);
  $folio = $_POST['folio'];
  if ($folio % 3 == 0 ) {
    $estadoFolio = 'V';
  }else {
      $estadoFolio = 'I';
  }
  $insertParams = array(
    'fechaCliente' => $_POST['fechaCliente'],
    'horaCliente' => $_POST['horaCliente'],
    'fechaTicket' => $_POST['fechaTicket'],
    'ticket' => $_POST['ticket'],
    'importe' => $_POST['importe'],
    'sucursal' => $_POST['sucursal'],
    'folio' => $folio,
    'estadoFolio' => $estadoFolio,
    'usuario' => $_SESSION['idUsuario'],
    'ip' => $ip
  );

    // Conexion
    $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
    // Ver si no hay error
    if ($conn->connect_error) {
        die("<div class='formi'>
              <div class='error'>
                <h3>Error de conexion: ". $conn->connect_error."</h3>
              </div>
            </div>");
    }

    //Query stored in sql/dbCredentials.php
    $sql = insertReg($insertParams);

    $result = $conn->query($sql);

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

    $conn->close();
 ?>
