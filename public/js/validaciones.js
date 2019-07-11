$(document).ready(function(){

    $("#validationMail").hide();
    $("#validationPass").hide();

    // Si la casilla mail se deselecciona validamos tod
    $("#txtMail").blur(function(){
      var mail = $("#txtMail").val();
      var error ="";
      if(mail.length == 0){
        $("#pValidationMail").text("Debe ingresar un mail");
        $("#validationMail").slideDown( 500 );   
      }
      else{
        if(!validarMail(mail)){
            $("#pValidationMail").text("Debe ingresar un mail valido");
            $("#validationMail").slideDown( 500 );    
          }
        else{
            $("#validationMail").slideUp();
        }
      }

     


    });
  });





  function validarMail(email){
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    return caract.test(email)
  }