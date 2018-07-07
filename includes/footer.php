<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
   function dato(callback, valor) {
      $.ajax({
         type: "POST",
         url: "comprobar.php",
         data: {'accion': 'usuario', 'valor': valor},
         dataType: "json"
      })


      .done(function (data) {
         // console.log('obtenerCP : ' + data);
         callback(data);
      })

      .fail(function (jqXHR, textStatus, errorThrown) {
         //someErrorFunction();
         alert('usuario error!  jqXHR: ' + jqXHR + ' -- textStatus:' + textStatus +
            ' -- errorThrown:' + errorThrown);
      })


   }

   //
   $('#buscar').on('click',function(){
      //inicializar valores predeterminados
      $('#pba').attr("disabled", true);
      $('#msgUsuario').text('');
      var hoja = document.createElement('style')
      hoja.innerHTML = "#clave {border:1px solid #C5C8CC;}";
      document.body.appendChild(hoja);

      

      var valor = $('#clave').val();
      dato(function (data){

         if (data.respuesta) {
            console.log('click');
            $('#msgUsuario').text(data.info['nombre']);
            $('#direccion').val(data.info['direccion']);
            $('#telefono').val(data.info['telefono']);
            //$('#msgUsuario').val(data.info['nombre']);
            $('#e-mail').val(data.info['correo']);
            $('#pba').removeAttr("disabled");
            
            hoja.innerHTML = "#clave {border: 2px solid #55CE89;}";
            document.body.appendChild(hoja);
         }
      },valor);
   });

   //limpiar input, cambiar estilos y deshabilitar boton cuando se borre el input
      $('#clave').keyup(function(){
         $('#pba').attr("disabled", true);
         $('#msgUsuario').text('');
         $('#direccion').val('');
         $('#telefono').val('');
         $('#e-mail').val('');
         var hoja = document.createElement('style')
         hoja.innerHTML = "#clave {border:1px solid #C5C8CC;}";
         document.body.appendChild(hoja);
      });
</script>
</body>
</html>