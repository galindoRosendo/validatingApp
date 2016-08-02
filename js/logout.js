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
    setTimeout(function(){window.location="http://localhost:8080/validater.mx/";}, 6000);
});

/*Function to request querys[AJAX]*/
$(document).ready(function(){
$("#btnOut").click(function(){
  var parametros = {
  };
    $.ajax({
    		data: parametros,
        /*Production*/
        //url: "http://churchs.com.mx/validater/php/ajax/login.php",
        /*Test*/
    	  url: "http://localhost:8080/validater.mx/php/ajax/logout.php",
    		type:'POST',
    		success: function(result){
        $("#resultset").html(result);
    }
			});
});
});
