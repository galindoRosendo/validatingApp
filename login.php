<?php
header('Access-Control-Allow-Origin: *');
include("php/com/header.php");
include_once("php/sql/dbCredentials.php");
?>

 <div id='logInForm' class='formi' >
   <form class='' >
     <input id='txtusuario' type='text' name='usuario' value='' placeholder='Usuario'>

     <input id='txtpassword' type='password' name='password' value='' placeholder='Clave'>

     <input id='btnIn' type='button' name='btnIn' value='Ingresar'>
   </form>

 </div><!--logInForm-->

 <div id="loadingcontainer" >
     <div >
       <i class="fa fa-cog fa-spin fa-3x fa-fw"></i> <h3>Confirmando...</h3>
     </div>
 </div>
 <div class="formi" id="resultset">

 </div>

 <script type="text/javascript" src= "js/login.js">

 </script>
<?php
include("php/com/footer.php");
?>
