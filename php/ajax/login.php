<?php
include("../sql/dbCredentials.php");
session_start();
sleep (5);
if(isset($_POST["usuario"])){

    //UserData Array
    $logInParams = array(
      'usuario' => $_POST["usuario"],
      'password' => $_POST["password"]
     );

    // Crear conexion PHP > v5.3
    $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);

    // prueba
    if ($conn->connect_error) {
      die("<div class='formi'>
            <div class='error'>
              <h3>Error de conexion: ". $conn->connect_error."</h3>
            </div>
          </div>");
    }

    //query returned from sqlCredentials
    $sql = queryLogIn($logInParams);

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $_SESSION["idUsuario"] =  $row["idUsuario"];
          $_SESSION["user"] =  $row["username"];
          //Marca-Region
          $_SESSION["nombre"] =  $row["nombre"];
          //Sucursal
          $_SESSION["apellido"] =  $row["apellido"];
          $_SESSION["email"] =  $row["correoElectronico"];
        }
        echo "<div class='formi' id = 'response'>
                  <div class='info'>
                    <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Un momento porfavor. </h1>
                  </div>
                </div>
                <script type='text/javascript'>
                //Test
                //setTimeout(function(){window.location='http://localhost:8080/validater.mx/';}, 3000);
                //Production
                setTimeout(function(){window.location='http://churchs.com.mx/validater/';}, 3000);
                </script>
                ";
    } else {
        echo "<div class='formi' id = 'response'>
                  <div class='warning'>
                    <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Usuario o clave incorrectos. </h1>
                  </div>
                </div>
                ";
    }
    //cerrar conexion mysqli
    $conn->close();
}else {
  echo "
  ";
}
 ?>
