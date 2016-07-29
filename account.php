<?php
include("php/com/header.php");
include_once("php/sql/dbCredentials.php");
 ?>

<?php

          $username= $_SESSION["user"];
          $nombreCompleto=$_SESSION["nombre"].' '.$_SESSION["apellido"];
          $email=$_SESSION["email"];

 ?>

 <div class="formi" id= "formInfo">
   <form class="" action="" method="">
     <input readonly type="text" name="username" <?php echo " value='Usuario: ".$username."'"; ?>>

     <input readonly type="text" name="nombreCompleto" <?php echo " value='Nombre Completo: ".$nombreCompleto."'"; ?>>

     <input readonly type="text" name="correoElectronico" <?php echo " value='Email: ".$email."'"; ?>>

    <a href="logout.php">Salir</a>
  </form>
</div> <!--customerData>-->

  <script type="text/javascript">
  $( "#linkhome" ).removeClass( "active" );
  $( "#linkuser" ).addClass( "active" );
  </script>
 <?php
include("php/com/footer.php");
  ?>
