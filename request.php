<?php
header('Access-Control-Allow-Origin: *');
include("php/com/header.php");
include("php/sql/dbCredentials.php");
 ?>

 <?php
 if(isset($_SESSION["user"])){
   //Apellido -> Sucursal y numero
   $sucursal = $_SESSION['apellido'];
   //usuario -> username[login]
   $usuario = $_SESSION['user'];

echo "  <div id='queryForm' class='formi'>
    <form class='' >

      <select id='cmbSucursal' class='selec' name='typeDate'>
              <option value='$usuario'> $sucursal	</option>
      </select>

      <input id='importe' type='text' name='txtimporte' value='' placeholder='Monto $00.00' autocomplete='off' onkeypress='return onlyNumbersWithDot(event);'>

      <input id='folio' type='text' name='txtfolio' value='' placeholder='Folio' autocomplete='off'>

      <input id='ticket' type='text' name='txtticket' value='' placeholder='Ticket' autocomplete='off'>

      <input id='dateT' type='text' name='txtfecha' value='' placeholder='AAAA-MM-DD' autocomplete='off'>

      <input id='btnSubmit' type='button' name='btnSubmit' value='Validar' >

    </form>
  </div><!--logInForm-->";
 }else {
echo "
<div class='contentcenter'>
  <div class='formi' >
    <div class='warning'>
      <h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Debe estar registrado </h1>
    </div>
  </div>
</div>";
 }
  ?>


<div id="loadingcontainer" >
    <div >
      <i class="fa fa-cog fa-spin fa-3x fa-fw"></i> <h3>Validando...</h3>
    </div>
</div>
<div class="formi" id="resultset">

</div>
<script type="text/javascript" src="js/request.js"></script>
<script type="text/javascript">
$( "#linkhome" ).removeClass( "active" );
$( "#linkrequest" ).addClass( "active" );
</script>
 <?php
include("php/com/footer.php");
  ?>
