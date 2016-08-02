<?php
header('Access-Control-Allow-Origin: *');
session_start();
sleep (5);
unset($_SESSION["idUsuario"]);
unset($_SESSION["user"]);
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);
unset($_SESSION["email"]);

echo "<div class='formi' id = 'response'>
          <div class='info'>
            <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Casi listo. </h1>
          </div>
        </div>";
