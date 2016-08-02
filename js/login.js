/*NavBar Color*/
$("#linkhome").removeClass( "active" );
$("#linkuser").addClass( "active" );

/*hiden items*/
$("#loadingcontainer").hide();

/*Ajax Events to show/hide items*/
$(document).ajaxStart(function(){
    $("#loadingcontainer").css("display", "block");
    $("#response").css("display", "none");
});
$(document).ajaxComplete(function(){
    $("#loadingcontainer").css("display", "none");
    $("#response").css("display", "block");
    //Test
    //setTimeout(function(){window.location="http://localhost:8080/validater.mx/";}, 3000);
    //Production
    setTimeout(function(){window.location="http://churchs.com.mx/validater/";}, 3000);
});

/*Function to request querys[AJAX]*/
$(document).ready(function(){
$("#btnIn").click(function(){
  var usuario =  document.getElementById('txtusuario').value;
  var password= document.getElementById('txtpassword').value;
  var parametros = {
    'usuario':usuario,
    'password':password
  };
  if (usuario.length > 0 && password.length > 0) {
    $.ajax({
    		data: parametros,
        /*Production*/
        url: "http://churchs.com.mx/validater/php/ajax/login.php",
        /*Test*/
    	  //url: "http://localhost:8080/validater.mx/php/ajax/login.php",
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
