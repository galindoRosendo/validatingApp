<?php
include("php/com/header.php");
 ?>

<?php
unset($_SESSION["idUsuario"]);
unset($_SESSION["user"]);
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);
unset($_SESSION["email"]);

header("Location: logout.php");
 ?>
 <script type='text/javascript'>
 $( '#linkhome' ).removeClass( 'active' );
 $( '#linkuser' ).addClass( 'active' );
 </script>
 <?php
include("php/com/footer.php");
  ?>
