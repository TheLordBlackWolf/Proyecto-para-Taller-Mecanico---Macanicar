$("button#submit").click(function() {

  if( $("#correo").val() == "" || $("#password").val() == "")
      $("div#msg").html("<div class='ojo'>Ingrese su email y contraseña</div>"),
      $('#caja_login').shake();


  else
      $.post( $("#login").attr("action"),
              $("#login :input").serializeArray(),
              function (data) {
                  $("div#msg").html(data),
                  $('#caja_login').shake();
                  });

      $("#login").submit( function(){
      return false;
      });
  });


$("button#registro").click(function() {

  if( $("#correo_reg").val() == "" || $("#nick_reg").val() == "" || $("#pass_reg").val() == "" || $("#pass2_reg").val() == "")
      $("div#msg-reg").html("<div class='ojo'>Ingrese los datos requeridos.</div>"),
      $('#caja_registro').shake();


  else
      $.post( $("#registro").attr("action"),
              $("#registro :input").serializeArray(),
              function (data) {
                  $("div#msg-reg").html(data),
                  $('#caja_registro').shake();
                  });

      $("#registro").submit( function(){
      return false;
      });
  });
