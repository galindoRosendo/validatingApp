<?php
include("php/com/header.php");
include_once("php/sql/dbCredentials.php");
?>

<?php
if(isset($_POST["usuario"])){

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
      // Crear conexion
    $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
    // prueba
    if ($conn->connect_error) {
        die("Error de conexion: " . $conn->connect_error);
    }

    $sql = "SELECT idUsuario, username, nombre, apellido, correoElectronico  FROM usuarios WHERE username = '$usuario' AND contrasenia = '$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $_SESSION["idUsuario"] =  $row["idUsuario"];
          $_SESSION["user"] =  $row["username"];
          $_SESSION["nombre"] =  $row["nombre"];
          $_SESSION["apellido"] =  $row["apellido"];
          $_SESSION["email"] =  $row["correoElectronico"];
        }
          header("Location: index.php");
    } else {
        echo "0 results";
    }
    $conn->close();

}else {

}
 ?>

<div id="logInForm" class="formi" action="login.php" method="post">
  <form class="" action="login.php" method="post">
    <input type="text" name="usuario" value="" placeholder="Usuario">

    <input type="password" name="password" value="" placeholder="Contraseña">

    <input type="submit" name="btnIn" value="Ingresar">
  </form>

</div><!--logInForm-->

<script type="text/javascript">
$( "#linkhome" ).removeClass( "active" );
$( "#linkuser" ).addClass( "active" );
</script>
<?php
include("php/com/footer.php");
?>
