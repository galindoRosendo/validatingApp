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

     <input id='btnOut' type='button' name='btnOut' value='Salir'>
  </form>
</div> <!--customerData>-->

<div id="loadingcontainer">
    <div >
      <i class="fa fa-cog fa-spin fa-3x fa-fw"></i> <h3>Un momento porfavor...</h3>
    </div>
</div>
<div class="formi" id="resultset">

</div>

<script type="text/javascript" src='js/logout.js'>

</script>
 <?php
include("php/com/footer.php");
  ?>
