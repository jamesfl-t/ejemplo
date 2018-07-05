$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      $("#clave").focus();
                                                 
      //comprobamos si se pulsa una tecla
      $("#clave").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#clave").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {      
                                           
                  $("#resultado").html('<img src="../img/loading-page.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});