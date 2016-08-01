/*NavBar Color*/
$("#linkhome").removeClass( "active" );
$("#linkconsulta").addClass( "active" );

/*hiden items*/
$("#loadingcontainer").hide();

/*Date pickers*/
$( function() {
  $( "#dateT" ).datepicker({ dateFormat: "yy-mm-dd" });
} );

/*currency rest*/
function onlyNumbersWithDot(e) {
    var charCode;
    if (e.keyCode > 0) {
        charCode = e.which || e.keyCode;
    }
    else if (typeof (e.charCode) != "undefined") {
        charCode = e.which || e.keyCode;
    }
    if (charCode == 46)
        return true
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

/*Ajax Events to show/hide items*/
$(document).ajaxStart(function(){
    $("#loadingcontainer").css("display", "block");
    $("#response").css("display", "none");
});
$(document).ajaxComplete(function(){
    $("#loadingcontainer").css("display", "none");
    $("#response").css("display", "block");
    $("#dateT").attr("value", "");
    $("#timeT").attr("value", "");
    $("#ticket").attr("value", "");
    $("#importe").attr("value", "");
    $("#folio").attr("value", "");

});

/*Function to request querys[AJAX]*/
$(document).ready(function(){
$("#btnSubmit").click(function(){
  var fecha = new Date();
  var fechaCliente = fecha.getFullYear() + '-' + fecha.getMonth() + '-' + fecha.getDate();
  var horaCliente = fecha.getHours() + ':' + fecha.getMinutes();
  var fechaTicket = document.getElementById('dateT').value;
  var ticket =  document.getElementById('ticket').value;
  var importe= document.getElementById('importe').value;
  var sucursal =  document.getElementById('cmbSucursal').value;
  var folio= document.getElementById('folio').value;
  var parametros = {
    'fechaCliente':fechaCliente,
    'horaCliente':horaCliente,
    'fechaTicket':fechaTicket,
    'ticket':ticket,
    'importe':importe,
    'sucursal':sucursal,
    'folio':folio,
  };
  if (ticket.length > 0 && importe.length > 0 && folio.length > 0 && fechaTicket.length > 0) {
    $.ajax({
    		data: parametros,
        /*Production*/
        url: "http://churchs.com.mx/validater/php/ajax/validater.php",
        /*Test*/
    		//url: "http://localhost:8080/validater.mx/php/ajax/validater.php",
    		type:'POST',
    		success: function(result){
        $("#resultset").html(result);
    }
			});
  }else {
    alert('Debe llenar todos los campos');
  }

});
});
