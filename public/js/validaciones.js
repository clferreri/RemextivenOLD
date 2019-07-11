$(document).ready(function(){

    $("#validationMail").hide();
    $("#validationPass").hide();

    // Si la casilla mail se deselecciona validamos tod
    $("#txtMail").blur(function(){
      var mail = $("#txtMail").val();
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


    $("#txtPass").blur(function(){
      var pass = $("#txtPass").val();
      
      if(pass.length == 0){
        $("#pValidationPass").text("Debe ingresar una contraseña");
        $("#validationPass").slideDown( 500 );   
      }
      else{
          $("#validationPass").slideUp();        
      }
    });
  });





  function validarMail(email){
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    return caract.test(email)
  }