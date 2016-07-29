<?php
include("php/com/header.php");
include("php/sql/dbCredentials.php");
 ?>

 <?php
 if(isset($_SESSION["user"])){
echo "  <div id='queryForm' class='formi'>
    <form class='' >

      <select id='cmbSucursal' class='selec' name='typeDate' onchange='muestra()'>
              <option value='LDO1'>	LDO1</option>
              <option value='LDO2'>	LDO2</option>
              <option value='LDO3'>	LDO3</option>
              <option value='LDO5'>	LDO5</option>
              <option value='LDO6'>	LDO6</option>
              <option value='LDO7'>	LDO7</option>
              <option value='PNG1'>	PNG1</option>
              <option value='REY1'>	REY1</option>
              <option value='REY2'>	REY2</option>
              <option value='REY3'>	REY3</option>
              <option value='REY4'>	REY4</option>
              <option value='REY5'>	REY5</option>
              <option value='REY6'>	REY6</option>
              <option value='REY7'>	REY7</option>
              <option value='MAT1'>	MAT1</option>
              <option value='MAT2'>	MAT2</option>
              <option value='MAT3'>	MAT3</option>
              <option value='MAT4'>	MAT4</option>
              <option value='MAT6'>	MAT6</option>
              <option value='RBR1'>	RBR1</option>
              <option value='MAL1'>	MAL1</option>
              <option value='JRZ3'>	JRZ3</option>
              <option value='JRZ4'>	JRZ4</option>
              <option value='JRZ6'>	JRZ6</option>
              <option value='JRZ8'>	JRZ8</option>
              <option value='REY8'>	REY8</option>
              <option value='JRZ9'>	JRZ9</option>
              <option value='MAT7'>	MAT7</option>
              <option value='LDO8'>	LDO8</option>

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
