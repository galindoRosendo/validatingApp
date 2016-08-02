<?php
/* Test Credentials
define("NOMBRE_HOST","localhost");
define("BASE_DE_DATOS","validater");
define("USUARIO","root");
define("CONTRASENA","mkt2016");
*/

/*Production Credentials*/
define("NOMBRE_HOST","localhost");
define("BASE_DE_DATOS","churchs_valticket");
define("USUARIO","churchs_valuser");
define("CONTRASENA","ticket_validater_user_2016");
define("PUERTO", 3306);

function queryLogIn($param){
  $usuario = $param['usuario'];
  $password = $param['password'];
  $sqlSt = "SELECT idUsuario, username, nombre, apellido, correoElectronico
            FROM usuarios
            WHERE username = '$usuario' AND contrasenia = '$password' ";
  return $sqlSt;
}

function insertReg($param){
  $usuario = $param['usuario'];
  $fechaCliente = $param['fechaCliente'];
  $horaCliente = $param['horaCliente'];
  $fechaTicket = $param['fechaTicket'];
  $ticket = $param['ticket'];
  $importe = $param['importe'];
  $folio = $param['folio'];
  $estadoFolio = $param['estadoFolio'];
  $sucursal = $param['sucursal'];
  $ip = $param['ip'];
  $sqlSt = "INSERT INTO registrotickets(idregistrotickets, idUsuario, fechacliente, horacliente, fechaticket, ticket, importe, folio, estadofolio, sucursal, ip)
            VALUES( 0, $usuario, '$fechaCliente', '$horaCliente', '$fechaTicket', '$ticket', $importe, '$folio', '$estadoFolio','$sucursal', '$ip');";

  return $sqlSt;
}

?>
